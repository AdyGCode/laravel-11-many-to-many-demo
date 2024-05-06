<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
      'given_name',
      'family_name',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

}
