<?php

namespace App\Usecases;

use App\Repositories\MemberRepository;
use App\Models\Member;
use App\Http\Requests\MemberAddRequest;
use App\Http\Resources\MemberResouce;

class MemberAddUsecase
{
    /**
     * @var MemberRepository
     */
    private $memberRepository;
    
    /**
     * constract
     *
     * @param MemberRepository $memberRepository
     * @return void
     */
    public function __construct(MemberRepository $memberRepository)
    {
        $this->memberRepository = $memberRepository;
    }

    /**
     * 登録
     *
     * @param MemberAddRequest $params
     * @return Member
     */
    public function handle(MemberAddRequest $request): MemberResouce
    {
        $member = $this->memberRepository->insert($this->formatParams($request->all()));
        return new MemberResouce($member);
    }

    /**
     * リクエストデータの整形
     *
     * @param array $params
     * @return array
     */
    public function formatParams(array $params): array
    {
        $params['password'] = password_hash($params['password'], PASSWORD_DEFAULT);
        $params['birthday'] = $params['birthday_year'] . '-' . $params['birthday_month'] . '-' . $params['birthday_day'];
        return $params;
    }
}
