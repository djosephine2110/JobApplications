<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $fillable = ['blood_type', 'light_disease', 'heavy_disease', 'opname','eyesight', 'hearing', 'health', 'em_name', 'em_address', 'em_zipcode', 'em_phone', 'em_relation'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
