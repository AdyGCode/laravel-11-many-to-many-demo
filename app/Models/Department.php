<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


    public function manager()
    {
        return $this->hasOne(Employee::class, 'id', 'manager');
    }
}
