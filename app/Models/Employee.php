<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'position',
        'phone',
        'is_hired'
        ];

    public function getEmployees(){
        return Employee::all();
    }
}
