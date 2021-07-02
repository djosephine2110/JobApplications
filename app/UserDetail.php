<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['name', 'ktp', 'birth_place', 'dob','gender', 'religion', 'address', 'zipcode', 'phone', 'home_number', 'sim_a', 'sim_c', 'vehicle', 'hobby'];
}
