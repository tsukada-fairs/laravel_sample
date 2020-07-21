<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'sex',
        'birthday',
        'post_code',
        'addr1',
        'addr2',
        'addr3',
        'addr4',
        'tel1',
        'tel2',
        'height',
        'weight'
    ];

    /**
     * 登録
     *
     * @param array $params
     * @return Member
     */
    public function insert(array $params): Member
    {
        return $this->create($params);
    }
}
