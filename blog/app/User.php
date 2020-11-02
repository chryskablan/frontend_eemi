<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone_number', 'birth', 'address', 'city', 'country', 'cp', 'profil', 'password',
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

    /**
     * CONSTANTES PROFIL 
     */
    const PROFIL_USER = 'user'; 
    const PROFIL_ADMIN = 'admin';
    const PROFIL_CONTRIBUTEUR = 'contributeur'; 

    const PROFILS = [
        self::PROFIL_USER => 'Utilisateur par défaut',
        self::PROFIL_ADMIN => 'Administrateur',
        self::PROFIL_CONTRIBUTEUR => 'Contributeur'
    ]; 

    /**
     * Méthodes 
     */
    public function isProfil(string $profil)
    {
        return $this->profil == $profil; 
    }
}
