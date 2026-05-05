<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactAdminMail;
use App\Mail\ContactClientConfirmationMail;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        $validator = $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:20',
            'subject'     => 'required|string|max:255',
            'description' => 'required|string|min:10',
        ],[
            'name'        => 'name is required',
            'email'       => 'email is required',
            'phone'       => 'phone is required',
            'subject'     => 'subject is required',
            'description' => 'description is required',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        try {
            $formData = $request->all();

            // 1. Send detailed inquiry summary to Dreamclone team
            Mail::to('dreamclone112@gmail.com')->send(new ContactAdminMail($formData));

            // 2. Send reassurance auto-confirmation back to client
            Mail::to($formData['email'])->send(new ContactClientConfirmationMail($formData));

            return redirect()->route('web-contact')->with(['success', 'Thank you! Your message has been sent successfully. We will contact you soon.']);

        } catch (\Exception $e) {
            return redirect()->route('web-contact')->with(['error', 'Something went wrong while sending your inquiry. Please try again.']);
        }
    }


}
