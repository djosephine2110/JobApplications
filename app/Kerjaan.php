<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerjaan extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
