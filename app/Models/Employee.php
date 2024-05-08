<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;


    // Department Manager *********************************************

    // $this employee manages ONE department
    public function department(): HasOne
    {
        return $this->hasOne(Department::class, 'manager_id');
    }


    // Employee Manager ***********************************************

    // $this employee is MANAGED BY ONE employee
    public function managedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'manager_id', 'id');
    }

    // $this employee MANAGES many employees
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'manager_id', 'id');
    }

}
