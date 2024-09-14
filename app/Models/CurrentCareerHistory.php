<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CurrentCareerHistory extends Model
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
        'current_salary',
        'current_allowance',
        'latest_bonus_sum',
        'latest_bonus_date',
        'responsible_officer',
        'resign_period',
    ];
}
