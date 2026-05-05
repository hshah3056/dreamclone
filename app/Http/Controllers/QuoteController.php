<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GetQuoteMail;
use App\Mail\QuoteClientConfirmationMail; // Import the confirmation mail
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    public function submitQuote(Request $request)
    {
        // 1. Validate Form Input Data
        $validator = $request->validate([
            'name'           => 'required|string|max:255',
            'email'          => 'required|email|max:255',
            'phone'          => 'required|string|max:10',
            'service'        => 'required|string',
            'budget'         => 'required|string',
            'company_name'   => 'nullable|string|max:255',
            'description'    => 'required|string|max:1000',
        ],[
            'name'          => 'name is required.',
            'email'          => 'email is required.',
            'phone'          => 'phone is required.',
            'service'        => 'service is required.',
            'budget'         => 'budget is required.',
            'company_name'   => 'company_name is required.',
            'description'    => 'description is required.',
        ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'success' => false,
        //         'errors'  => $validator->errors()
        //     ], 422);
        // }

        try {
            $formData = $request->all();

            // 2. Dispatch Email (Replace with your actual company mailbox)
            Mail::to('dreamclone112@gmail.com')->send(new GetQuoteMail($formData));

            // 3. Send instant assurance confirmation to the client's email address
            Mail::to($formData['email'])->send(new QuoteClientConfirmationMail($formData));

            return redirect()->route('home')->with(['success' => 'Thank you! Your quote request has been received successfully.']);
            // return response()->json([
            //     'success' => true,
            //     'message' => 'Thank you! Your quote request has been received successfully.'
            // ], 200);

        } catch (\Exception $e) {
            // Log details if needed (Log::error($e->getMessage()))
            return redirect()->route('home')->with(['error' => 'Something went wrong while processing your request. Please try again....']);
            // return response()->json([
            //     'success' => false,
            //     'message' => 'Something went wrong while processing your request. Please try again.'
            // ], 500);
        }
    }
}
