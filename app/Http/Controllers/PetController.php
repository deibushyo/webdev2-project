<?php

// app/Http/Controllers/PetController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet; // Import the Pet model

class PetController extends Controller
{
    public function getPetsData()
    {
        $pets = Pet::all(); // Assuming you have a Pet model representing the 'pets' table

        return response()->json($pets);
    }
}
