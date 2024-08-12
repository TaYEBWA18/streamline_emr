<?php

namespace Modules\PatientRegistration\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientRegistration\Database\factories\PatientModelFactory;

class PatientModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     */
    protected $table = 'patient';
    
    protected $fillable = [
        'First_name',
        'last_name',
        'gender',
        'date_of_birth',
        'phone_number',
        'nok',
        'nok_relationship',
        'nok_phone_number',
        'user_id'
    ];

    public function patientRecord()
    {
        return $this->belongsTo(Modules\User\App\Models\UserModel::class);
    }

}
