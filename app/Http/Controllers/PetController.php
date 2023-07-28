<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet; // Assuming your model name is 'Pet'

class PetController extends Controller
{
    public function getPetsData()
    {
        $pets = Pet::all(); // Retrieve all pets from the database
        return response()->json($pets); // Return the pets' data as JSON
    }
}
