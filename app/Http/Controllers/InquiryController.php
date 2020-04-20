<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ServiceInquiry;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    /**
     * Receives form inquiry in the homepage
     *
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\Response
     */
    public function inquire(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to(env('MAIL_TO'))
            ->send(new ServiceInquiry($request->input('name'), $request->input('email'), $request->input('message')));

        return response()->json([
            'success' => true
        ],200);
    }
}
