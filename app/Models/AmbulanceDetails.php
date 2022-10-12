<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmbulanceDetails extends Model
{
    protected $fillable = [
        'RegNo',
        'HospitalsName',
        'DriversName',
        'Id',
        'PhoneNumber',
    ];
    use HasFactory;
}
