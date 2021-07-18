<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        // makes all of these able to be manipulated
        'first_name',
        'last_name',
        'email',
        'city',
        'country',
        'job_title'
    ];
}
