<?php

namespace Modules\PatientRegistration\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientRegistration\Database\factories\DiagnosisFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diagnosis extends Model
{
    use HasFactory;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'icd_code'
    ];
    
    protected static function newFactory(): DiagnosisFactory
    {
        //return DiagnosisFactory::new();
    }
    public function record(){
        return $this->belongsTo(Record::class);
    }
}
