<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Married extends Model
{
    protected $fillable = ['married_status', 'spouse_name', 'spouse_bplace', 'spouse_dob','spouse_education', 'spouse_job'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
