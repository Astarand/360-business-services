<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\GreetingMail;
use App\Mail\ContactMailAdmin;



class ContactController extends Controller
{
    public function Index()
    {
        return view('pages.contact');
    }

    public function contact_form_submit(Request $request)
    {
        // Verify reCAPTCHA v3
        $recaptchaToken = $request->input('recaptcha_token');
        if (!$this->verifyRecaptcha($recaptchaToken)) {
            if($request->type == "quote"){
                return response()->json(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
            } else {
                return back()->with('error', 'reCAPTCHA verification failed. Please try again.');
            }
        }

        // Validate form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'subject' => 'required|string|max:255',
            'comments' => 'required|string|max:500',
            'recaptcha_token' => 'required',
        ]);

        // Create new contact record
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->comments = $request->comments;
        $contact->type = $request->type;
        $contact->save();

        $subject = ($request->type == "quote") ? 'Quote Data Information' : 'New Contact Information';

        try {

            // Send email notification to admin
            Mail::to(env('ADMIN_EMAIL', 'contact@360bizservice.com'))
                ->send(new ContactMailAdmin($request->all(), $subject));

            //email send to user
            $recipientEmail = $request->email;
            Mail::to($recipientEmail)
                ->send(new GreetingMail($recipientEmail));

                if($request->type == "quote"){
                    return response()->json(['status' => 'success', 'message' => 'Thank you for contuct us.']);
                }else{
                    return back()->with('success', 'Thank you for contacting us.');
                }
            
            
        } catch (\Exception $e) {
            // Return error response

            if($request->type == "quote"){
                return response()->json(['status' => 'error', 'message' => 'Failed to send email: ' . $e->getMessage()]);
            }else{
                return back()->with('error', 'Failed to send email.');
            }
            
            
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

        $secretKey = '6LczXeQrAAAAAA1XC_l41LGitQqEcHijR7cD7cip';
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
