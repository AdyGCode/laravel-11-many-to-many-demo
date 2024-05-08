<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Department extends Model
{
    use HasFactory;


    // $this department is MANAGED BY ONE (belongs to) employee
    public function managedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }

    // $this department HAS MANY employees
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
