<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class OtherInformation extends Model
{
    use HasFactory;

    protected $keyType = 'string'; // Set the key type to UUID
    public $incrementing = false; // Disable auto-incrementing

    public static function booted()
    {
        static::creating(function($model)
        {
            $model->id = Str::uuid();
        });
    }

    protected $fillable = [
        'job_id',
        'candidate_id',
        'bm_status',
        'bi_status',
        'other_language_name',
        'other_language_status',
        'drug_status',
        'drug_description',
        'bankcrupt_status',
        'bankcrupt_description',
        'business_status',
        'business_description',
        'license_status',
        'license_description',
        'smoking_status',
        'drinking_status',
        'illness_status',
        'illness_description',
        'physical_status',
        'physical_description',
        'pregnancy_status',
        'pregnancy_description',
        'ref1_name',
        'ref1_phone_num',
        'ref1_company',
        'ref1_designation',
        'ref2_name',
        'ref2_phone_num',
        'ref2_company',
        'ref2_designation',

    ];
}
