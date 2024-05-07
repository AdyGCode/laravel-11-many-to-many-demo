<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'given_name',
        'family_name',
    ];


    public function fullName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => $attributes['given_name'].' '.$attributes['family_name']);
    }

    public function familyGivenName(): Attribute
    {
        return Attribute::make(
            get: fn($value, $attributes) => $attributes['family_name'].', '.$attributes['given_name']);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
