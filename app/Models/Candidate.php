<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Candidate extends Model
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
        'name',
        'birthdate',
        'gender',
        'race',
        'age',
        'ic_num',
        'marital_status',
        'fixed_address',
        'mail_address',
        'phone_tel_num',
        'home_tel_num',
        'email',
    ];

}
