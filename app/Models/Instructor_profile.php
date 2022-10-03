<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\InsAuth as Ins;
use Illuminate\Notifications\Notifiable;


class Instructor_profile extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'instructor_profiles';
    protected $primarykey = "profile_id";

    public function GetProfile(){

        return $this->hasOne("App\Models\Instructor","instructor_id");

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'position',
        'introduction',
        'experience',
        'expertise',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
