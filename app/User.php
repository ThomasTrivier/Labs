<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        return $this->role === 'admin';
    }

    public function isEditor(){
        if ($this->role === 'admin' || $this->role === 'editor') {
            return true;
        } else {
            return false;
        } 
    }

    public function getPatchAttribute(){
        $url = $this->photo_path;
        
        if (stristr($this->photo_path, 'http') === false ) {
            $url = "storage/" . $this->photo_path;
        }

        return $url;
    }
}
