<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return response()->json([
            'success' => true
        ],200);
    }
}
