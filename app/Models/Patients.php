<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'physician_id', 'firstname', 'lastname', 'middlename', 'age',
        'gender','civilstatus', 'address', 'birthdate','contactno','status'
    ];
}
