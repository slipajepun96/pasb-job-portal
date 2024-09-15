<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

use App\Models\Candidate;

class Job extends Model
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
        'job_ads_title',
        'job_location',
        'job_description',
        'start_date',
        'end_date',
        'ads_link',
    ];

    public function candidate()
    {
        return $this->hasMany(Candidate::class);
    }
}
