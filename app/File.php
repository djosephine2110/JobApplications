<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['file'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
