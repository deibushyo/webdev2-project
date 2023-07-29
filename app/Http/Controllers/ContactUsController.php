<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'concern' => 'sometimes|array',
            'message' => 'required|string',
        ]);

        // Convert the array of concerns to a JSON array
        $concerns = json_encode($request->input('concern'));

        // Insert the data into the database
        DB::table('contactus')->insert([
            'contact_name' => $request->input('name'),
            'contact_email' => $request->input('email'),
            'contact_phone' => $request->input('phone'),
            'contact_concern' => $concerns,
            'contact_message' => $request->input('message'),
        ]);

        // Redirect back to the contact form with a success message
        return redirect()->back()->with('success', 'Thank you for contacting us!');
    }
}
