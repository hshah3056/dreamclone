<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CampaignMail;
use Illuminate\Support\Facades\Mail;

class CampaignController extends Controller
{
    /**
     * Display the campaign page with the input form.
     */
    public function showForm()
    {
        return view('campaign');
    }

    /**
     * Handle the form submission and send the campaign email.
     */
    public function sendCampaign(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ], [
            'email.required' => 'Please enter a valid email address.',
            'email.email' => 'The input must be a valid email address style.',
        ]);

        try {
            $email = $request->input('email');

            // Send the professional campaign mail to the provided address
            Mail::to($email)->send(new CampaignMail($email));

            return redirect()->route('campaign.show')->with([
                'success' => 'Extraordinary! The Dreamclone campaign preview has been sent to ' . htmlspecialchars($email) . '. Check your inbox!'
            ]);
        } catch (\Exception $e) {
            return redirect()->route('campaign.show')->with([
                'error' => 'An error occurred while sending the campaign email: ' . $e->getMessage()
            ])->withInput();
        }
    }

    /**
     * Preview the campaign email template directly in the browser.
     */
    public function previewTemplate()
    {
        return view('emails.campaign-template');
    }
}
