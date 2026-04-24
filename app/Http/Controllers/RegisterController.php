<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Mail;
use App\Mail\GreetingMail;
use App\Mail\RegisterMailAdmin;
use App\Mail\QueryMailAdmin;
use Illuminate\Support\Facades\Http;


class RegisterController extends Controller
{



    public function register_form_submit(Request $request)
    {
        // Validate input including reCAPTCHA token
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
            'recaptcha_token' => 'required',
        ]);

        // Verify reCAPTCHA v3
        $recaptchaToken = $request->input('recaptcha_token');
        if (!$this->verifyRecaptcha($recaptchaToken)) {
            return response()->json(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
        }
        
        $model = new Register;
        $model->name = $request->name ?? 'Valued Customer';
        $model->email = $request->email;
        $model->phone = $request->phone;
        $model->city = $request->city;
        $model->page_name = $request->page_name;
        $model->remember_token = $request->_token;
        $model->whatsapp_update = $request->whatsapp_update ? 'yes' : 'no';
        $model->save();


        try {
            // Send email notification to admin
            Mail::to('contact@360bizservice.com')
                ->send(new RegisterMailAdmin($request->all()));

            // Send greeting email to user
            $customerName = $request->name ?? 'Valued Customer';
            Mail::to($request->email)
                ->send(new GreetingMail($customerName));

            return response()->json(['status' => 'success', 'message' => 'Data inserted successfully and email sent']);
        } catch (\Exception $e) {
            // Return error response
            return response()->json(['status' => 'error', 'message' => 'Failed to send email: ' . $e->getMessage()]);
        }
    }

    public function query_submit(Request $request)
    {
        // Verify reCAPTCHA v3 (for consistency with other forms)
        $recaptchaToken = $request->input('recaptcha_token') ?? $request->input('g-recaptcha-response');
        if (!$this->verifyRecaptcha($recaptchaToken)) {
            return back()->with('error', 'reCAPTCHA verification failed. Please try again.');
        }

        $model = new Register;
        $model->name = $request->company_name;
        $model->email = $request->email;
        $model->phone = $request->contact_number;
        $model->topic = $request->topic;
        $model->other_topic = $request->other_topic;
        $model->remember_token = $request->_token;
        $model->save();

        try {
            // Send email notification to admin
            Mail::to('contact@360bizservice.com')->send(new QueryMailAdmin($request->all()));

            // Email send to user
            Mail::to($request->email)->send(new GreetingMail($request->company_name));

            // return response()->json(['status' => 'success', 'message' => 'Data inserted successfully and email sent']);
            return back()->with('success', 'Thank you for submit Queries.');
        } catch (\Exception $e) {
            // Return error response
            // return response()->json(['status' => 'error', 'message' => 'Failed to send email: ' . $e->getMessage()]);
            return back()->with('error', 'Failed to send email.');
        }
    }

    /**
     * Verify reCAPTCHA v3 token
     */
    private function verifyRecaptcha($token)
    {
        if (empty($token)) {
            return false;
        }

        $secretKey = '<Secrect Key Is Here>';
        $verifyURL = 'https://www.google.com/recaptcha/api/siteverify';
        
        $data = [
            'secret' => $secretKey,
            'response' => $token,
            'remoteip' => request()->ip()
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($verifyURL, false, $context);
        $response = json_decode($result, true);

        // Check if verification was successful and score is above threshold
        return isset($response['success']) && 
               $response['success'] === true && 
               isset($response['score']) && 
               $response['score'] >= 0.5; // Adjust threshold as needed (0.0 to 1.0)
    }
}
