<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['language', 'speaking', 'reading', 'writing'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
