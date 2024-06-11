<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserApiController extends Controller
{
    public function get_user_profile_data(Request $request)
    {
        // Retrieve session data
        $mobileNumber = $request->session()->get('Mobile_Number');
        $userType = $request->session()->get('User_Type');
        
        // Fetch user profile data based on Mobile_Number
        $data = DB::table('users')
            ->where('Mobile_Number', $mobileNumber)
            ->get(); // Assuming you expect only one record

        if ($data->isEmpty()) {
            return response()->json([
                'status' => 'fail',
                'message' => "Data not found"
            ]);
        } else {
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        }
    }

    public function get_all_upcoming_event(Request $request)
    {
        $events = DB::table('organiser_event_hosting')
            ->where('Event_Date_Time', '>=', now()) // Example condition
            ->orderBy('Event_Date_Time', 'asc')     // Example ordering
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $events
        ]);
    }

    public function show_eventDetails(Request $request)
    {
        $event_id = $request->input('Event_Id');

        $eventDetails = DB::table('organiser_event_hosting')
            ->leftjoin('organiser_event_gallery', 'organiser_event_hosting.Event_id', '=', 'organiser_event_gallery.Event_id')
            ->where('organiser_event_hosting.Event_id', $event_id)
            ->select('organiser_event_hosting.*', 'organiser_event_gallery.Image', 'organiser_event_gallery.Video') // Select required columns
            ->get();

        return response()->json(['eventDetails' => $eventDetails, 'status' => 'success']);
    }
}
