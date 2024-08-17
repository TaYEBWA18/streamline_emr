<?php

namespace Modules\PatientRegistration\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientRegistration\Database\factories\RecordFactory;

class Record extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
      
    'symptoms',
    'labtests',
    'diagnoses',
    'drugs',
    'outcome'

    ];
    
    protected static function newFactory(): RecordFactory
    {
        //return RecordFactory::new();
    }
    public function drugs(){
        return $this->hasMany(Drug::class);
    }
    public function diagnoses(){
        return $this->hasMany(Diagnosis::class);
    }
    public function labtests(){
        return $this->hasMany(Labtest::class);
    }
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
