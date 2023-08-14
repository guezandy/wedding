<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rsvp;

class RsvpController extends Controller
{
    // TAKES A NAME AND RETURNS SIMILAR NAMES 
    public function entry(Request $request)
    {
        // Julian De Leon -> juliandeleon
        $name = str_replace(' ', '', strtolower($request->name));
        $all_rsvp = Rsvp::select('id', 'name')->get();

        // Find name that matches
        foreach($all_rsvp as $rsvp) {
            if (str_contains(str_replace(' ', '', strtolower($rsvp->name)), $name)) {
                return $rsvp;
            }
        }
        return null;
    }

    // Confirm which name selected and returns the rsvp details
    public function confirmName($id) {
        $rsvp = Rsvp::where('id', '=', $id)->first();
        return view('rsvp-submit')->with('rsvp', $rsvp);
    }

    // Submit data
    public function confirmRsvp(Request $request) {
        $id = $request->id;
        $name = $request->name;
        $guestCount = $request->guestCount;
        $additional_guests = $request->additional_guests;
        $address = $request->address;
        $traveling = $request->has('traveling') ? true : false;

        $rsvp = Rsvp::where('id', '=', $id)->first();
        $rsvp->name = $name;
        $rsvp->guestCount = $guestCount;
        $rsvp->additional_guests = $additional_guests;
        $rsvp->address = $address;
        $rsvp->traveling = $traveling;
        $rsvp->confirmed = true;
        $rsvp->save();

        return view('welcome')->with('rsvp_confirmation', true);
    }
}
