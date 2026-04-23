<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmitted;
use App\Mail\GreetingMail;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function Career(){
        return view('pages.career');
    }
    public function submitApplication(Request $request)
    {
        

        if ($request->hasFile('resume')) {
            

            $resumeOriginalName = $request->file('resume')->getClientOriginalName();
            $resumeExtension    = $request->file('resume')->getClientOriginalExtension();
            $resumeName = 'resume_' . Str::uuid() . '.' . $resumeExtension; // Generate a unique filename
            $resumePath = $request->file('resume')->storeAs('public/uploads/resumes', $resumeName);
            $resumeLink = asset('storage/uploads/resumes/' . $resumeName);


        } else {
                $resumePath = null;
                $resumeName = null;
                $resumeLink = null;
        }
        // Create a new Application instance
        $application = new Application();
        $application->name = $request->input('name');
        $application->email = $request->input('email');
        $application->phone = $request->input('phone');
        $application->position = $request->input('position');
        $application->experience = $request->input('experience');
        $application->location = $request->input('location');
        $application->resume = $resumeName ?? null; 

        // Save the application
        $application->save();

        // Mail send to admin
        Mail::to('leads@360bizservice.com')->send(new ApplicationSubmitted($application, $resumeLink));

        // Mail Send to user
        $recipientEmail = $request->input('email');
            Mail::to($recipientEmail)
                ->send(new GreetingMail($recipientEmail));


        return redirect()->back()->with(['success' => 'Application submitted successfully!']);
    }
}
