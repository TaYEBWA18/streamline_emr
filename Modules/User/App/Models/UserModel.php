<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Database\factories\UserModelFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserModel extends Authenticatable
{
   protected $table='user';
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'gender',
        'date_of_birth',
        
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
    public function patient()
    {
        return $this->hasMany(Modules\PatientRegistration\App\Models\Patient::class);
    }
}
