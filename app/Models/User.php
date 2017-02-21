<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const ROLE_ADMIN = 1;
    const ROLE_TEACHER = 2;
    const ROLE_USER = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['url_avatar'];

    public function getUrlAvatarAttribute()
    {
        return config('user.path_to_avatar') . $this->avatar;
    }

    public function isAdmin()
    {
        return $this->role == User::ROLE_ADMIN;
    }

    public function isTeacher()
    {
        return $this->role == User::ROLE_TEACHER;
    }
}
