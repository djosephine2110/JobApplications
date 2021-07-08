<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_admin', 'image', 'file', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function details()
    {
        return $this->hasMany(UserDetail::class);
    }
    public function marrieds()
    {
        return $this->hasMany(Married::class);
    }
    public function images()
    {
        return $this->hasOne(Image::class);
    }
    public function languages()
    {
        return $this->hasOne(Language::class);
    }
    public function asings()
    {
        return $this->hasMany(Asing::class);
    }
    public function references()
    {
        return $this->hasMany(Reference::class);
    }
    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function relations()
    {
        return $this->hasMany(Relation::class);
    }
    public function organizations()
    {
        return $this->hasMany(Organization::class);
    }
    public function childrens()
    {
        return $this->hasMany(Children::class);
    }
    public function healths()
    {
        return $this->hasMany(Health::class);
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function anaks()
    {
        return $this->hasMany(Anak::class);
    }
    public function connections()
    {
        return $this->hasMany(Connection::class);
    }
}
