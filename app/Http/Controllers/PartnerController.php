<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

use Illuminate\Support\Facades\Mail;
use App\Mail\GreetingMail;
use App\Mail\PartnerMailAdmin;
use Illuminate\Support\Facades\Session;


class PartnerController extends Controller
{
    public function Partner()
    {
        return view('pages.partner');
    }

    public function submitForm(Request $request)
    {
    
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads/partners', $fileName); 
        
        
        
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->email = $request->email;
        $partner->phone = $request->phone;
        $partner->state = $request->state;
        $partner->city = $request->city;
        $partner->file_path = $fileName; 
        $partner->save();

        $subject = 'Partner Data Information';

        // Email send to user
        $recipientEmail = $request->email;
            Mail::to($recipientEmail)
                ->send(new GreetingMail($recipientEmail));

        // Email Send to Admin 
        $fileLink = url('storage/' . $filePath);
        
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $state = $request->state;
            $city = $request->city;
            
        
        Mail::to('leads@360bizservice.com')
            ->send(new PartnerMailAdmin($name, $email, $phone, $state, $city, $fileLink, $subject ));

        
            Session::flash('success', 'Email sent successfully and Partner data saved.');
        

        // Redirect back to the form or any other page
        return redirect()->back();
        
        
    }
}
