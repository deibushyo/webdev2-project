// app/Http/Controllers/AdoptionController.php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdoptionController extends Controller
{
    public function submitApplication(Request $request)
    {
        // Get the form data from the request
        $formData = $request->all();

        // Insert the form data into the database
        DB::table('adoption')->insert([
            'adopt_fname' => $formData['first_name'],
            'adopt_lname' => $formData['last_name'],
            'adopt_address' => $formData['address'],
            'adopt_phone' => $formData['phone'],
            'adopt_email' => $formData['email'],
            'adopt_birthdate' => $formData['birthdate'],
            'adopt_status' => $formData['status'],
            'adopt_preferedPet' => $formData['looking_to_adopt'],
            'adopt_specificPet' => $formData['specific_animal'],
            'adopt_idealPet' => $formData['ideal_pet_description'],
            'adopt_houseType' => $formData['building_type'],
            'adopt_move' => $formData['pet_removal'],
            'adopt_liveWith' => $formData['living_with'],
            'adopt_frontHouse' => $request->file('front_of_house')->store('uploads'),
            'adopt_streetView' => $request->file('street_photo')->store('uploads'),
            'adopt_livigRoom' => $request->file('living_room')->store('uploads'),
            'adopt_meetGreet' => $formData['visit_shelter'],
        ]);

        // You can add any additional validation or processing here if needed

        // Redirect back to the form page with a success message
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
