<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'physician_id', 'firstname', 'lastname', 'middlename', 'age',
        'gender','civilstatus', 'address', 'birthdate','contactno','status'
    ];

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }

    public function medications()
    {
        return $this->hasMany(Medication::class);
    }

    public function billing()
    {
        return $this->hasMany(Billing::class);
    }
    
}
