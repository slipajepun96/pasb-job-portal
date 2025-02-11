<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Authenticatable
// class User extends Model
{
    use HasFactory, Notifiable;
    // use HasFactory;
    // protected $keyType = 'string'; // Set the key type to UUID
    // public $incrementing = false; // Disable auto-incrementing

    // public static function booted()
    // {
    //     static::creating(function($model)
    //     {
    //         $model->id = Str::uuid();
    //     });
    // }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->uuid = Str::uuid(); // Auto-generate UUID
        });
    }

    protected $fillable = [
        'name',
        'uuid',
        'email',
        'password',
        'google_id',
        'access_level',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
