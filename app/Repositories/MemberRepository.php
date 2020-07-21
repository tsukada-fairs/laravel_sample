<?php

namespace App\Repositories;

use App\Models\Member;

class MemberRepository
{
    /**
     * @var Member
     */
    private $model;
    
    /**
     * constract
     *
     * @param Member $model
     * @return void
     */
    public function __construct(Member $model)
    {
        $this->model = $model;
    }

    /**
     * 登録
     *
     * @param array $params
     * @return Member
     */
    public function insert(array $params): Member
    {
        return $this->model->insert($params);
    }
}
