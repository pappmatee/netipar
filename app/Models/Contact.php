<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contact";

    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function addresses()
    {
        return $this->hasManyThrough(Address::class, AddressType::class);
    }
}
