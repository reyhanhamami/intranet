<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticableContract;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable;

class User extends Authenticatable
{
    use Notifiable, AuthenticableTrait;

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

    // syarat agar md5 dapat digunakan. 
    public function getAuthPassword()
    {
        return bcrypt($this->password);
    }
    protected function credentials(Request $request)
    {
        return [
            $this->email() => $request->get('email'),
            'password' => md5($request->get('password'))
        ];
    }

    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['password'];
        return $this->hasher->check($plain, $user->getAuthPassword());
    }
}
