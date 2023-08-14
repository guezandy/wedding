<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'greeting',
        'email',
        'phoneNumber',
        'guestCount',
        'additional_guests',
        'confirmed',
        'traveling'
    ];

    protected $table = 'rsvp';
}
