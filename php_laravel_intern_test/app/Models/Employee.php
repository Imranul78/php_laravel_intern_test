<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'date_of_birth', 'company_id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}

