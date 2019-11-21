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

    protected $table = 'SysSec_users';
    protected $connection = 'sqlsrv';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'pswd',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pswd', 'remember_token',
    ];

    // syarat agar md5 dapat digunakan. 
    public function getAuthPassword()
    {
        return bcrypt($this->pswd);
    }
    protected function credentials(Request $request)
    {
        return [
            $this->email() => $request->get('email'),
            'pswd' => md5($request->get('pswd'))
        ];
    }

    public function validateCredentials(UserContract $user, array $credentials)
    {
        $plain = $credentials['pswd'];
        return $this->hasher->check($plain, $user->getAuthPassword());
    }
}
