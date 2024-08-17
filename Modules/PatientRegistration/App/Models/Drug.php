<?php

namespace Modules\PatientRegistration\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\PatientRegistration\Database\factories\DrugFactory;
use Illuminate\Database\Eloquent\SoftDeletes;


class Drug extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */

    use SoftDeletes;

    protected $dates = ['deleted_at'];


    protected $fillable = [
        'name',
        'brand_name',
        'form',
    ];
    
    protected static function newFactory(): DrugFactory
    {
        //return DrugFactory::new();
    }
    public function record(){
        return $this->belongsToMany(Record::class);
    }
}
