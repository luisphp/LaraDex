<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

     /*Por ultimo esta funcion nos indica si el usuario esta autorizado para ver esa seccion*/

    public function authorizeRoles($roles){

        if($this->hasAnyRole($roles)){

            return true;

        }

        abort(401,'Esta accion no esta autorizada');

    }

    /*En esta seccion verificamos si tenemos un role para ese usuario*/

    public function hasAnyRole($roles){

    /*En esta seccion verificamos si se nos esta pasando una arreglo de roles*/

        if(is_array($roles)){

            foreach($roles as $role){

                if($this->hasRole($roles)){

                return true;
            }

            }

        }else{

            if($this->hasRole($roles)){

                return true;
            }
        }

    }

     /*En esta seccion verificamos si el usuario logeado tiene el role que se nos pase por el request*/

    public function hasRole($role){

        if($this->roles()->where('name',$role)->first()){

                return true;
        }

        return false;
    }

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
}
