<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;


    protected $fillable = [


        'firstName',
        'middleName',
        'lastName',
        'birthdate',
        'doc',
        'whatsapp',
        'email',
        'password',
        'deliveryName',
        'phone',
        'address',
        'addressNumber',
        'addressBlock',
        'addressDoor',
        'addressAditional',
        'country',
        'state',
        'city',
        'verified',
        'newsletter',
        'twoFactor',
        'active',
        'role',
        'mpw',

    ];
}
