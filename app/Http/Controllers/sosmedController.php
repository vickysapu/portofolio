<?php

namespace App\Http\Controllers;

use App\Models\sosmed;
use Illuminate\Http\Request;

class sosmedController extends Controller
{
    public function update_sosmed(Request $request) {
        // Find the record by its ID
        $updateSosmed = sosmed::first();

        // Check if the record exists
        if (!$updateSosmed) {
            // Handle the case where the record is not found
            return redirect()->route('tampilBeranda')->withErrors('Social media record not found.');
        }

        // Update the fields with input values from the request
        $updateSosmed->facebook = $request->input('facebook');
        $updateSosmed->whatsapp = $request->input('whatsapp');
        $updateSosmed->instagram = $request->input('instagram');
        $updateSosmed->github = $request->input('github');

        // Save the updated record
        $updateSosmed->save();

        // Redirect to the specified route
        return redirect()->route('tampilBeranda')->with('success', 'Social media accounts updated successfully.');
    }

}