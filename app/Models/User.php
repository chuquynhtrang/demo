<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Project;
use App\Models\UserProject;

class User extends Authenticatable
{
    use Notifiable;
    const ROLE_ADMIN = 1;
    const ROLE_STAFF = 2;
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

    public function isAdmin()
    {
        return $this->role == User::ROLE_ADMIN;
    }

    public function isStaff()
    {
        return $this->role == User::ROLE_STAFF;
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'id', 'teacher_id');
    }

    public function userProject()
    {
        return $this->hasOne(UserProject::class, 'user_id', 'id');
    }
}
