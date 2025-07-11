<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FranchiseApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
        'email',
        'birthDate',
        'education',
        'city',
        'district',
        'street',
        'sectorExperience',
        'brandExperience',
        'importantFactor',
        'budget',
        'ip_address',
    ];
}
