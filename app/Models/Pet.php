<?php

// app/Models/Pet.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets'; // Specify the table name

    protected $fillable = [
        'petID', 'petName', 'petAge', 'petSex', 'petDescription', 'petCategory', 'petImage'
        // Add other columns if necessary
    ];

    // Add any relationships or additional methods here, if needed
}
