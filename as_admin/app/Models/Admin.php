<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $guard = 'admin';

    public const STATUS_ACTIVE = 1;
    public const STATUS_SUSPENDED = 2;
    public const SUPER_ADMIN_ROLE_ID = 1;
    public const ADMIN_ROLE_ID = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'tel',
        'email',
        'password',
        'admin_role_id',
        'status',
        'department_id',
        'created_by',
        'updated_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * relationship to model Role
     */
    public function role()
    {
        return $this->belongsTo(AdminRole::class, 'admin_role_id');
    }

    /**
     * return fullname of admin
     */
    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    /**
     * Check user have super admin role
     *
     * @return bool
     */
    public function isSuperAdminRole()
    {
        return $this->admin_role_id === self::SUPER_ADMIN_ROLE_ID;
    }
}
