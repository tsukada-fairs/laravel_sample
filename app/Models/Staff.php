<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use HasApiTokens;

    /**
     * @var string
     */
    protected $table = 'staffs';

    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password'
    ];

    public function validateForPassportPasswordGrant($password)
    {
        return password_verify($password, $this->password);
    }
}
