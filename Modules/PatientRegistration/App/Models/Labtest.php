<?php

namespace Modules\PatientRegistration\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientRegistration\Database\factories\LabtestFactory;

class Labtest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'duration'
    ];
    
    protected static function newFactory(): LabtestFactory
    {
        //return LabtestFactory::new();
    }
    public function record(){
        return $this->belongsTo(Record::class);
    }
}
