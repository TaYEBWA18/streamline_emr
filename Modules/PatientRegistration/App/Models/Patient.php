<?php

namespace Modules\PatientRegistration\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientRegistration\Database\factories\PatientFactory;

use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     */
    use SoftDeletes;

    // protected $table = 'patients';

    protected $dates = ['deleted_at'];
   
    
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

    //function to relate the created patient with the user.
    public function user()
    {
        return $this->belongsTo(\Modules\User\App\Models\UserModel::class);
    }
    public function  appointments(){
        // return $this->hasMany(Modules\Appointment\App\Models\Appointment::class);
    }

}