<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Usecases\MemberAddUsecase;
use App\Http\Requests\MemberAddRequest;

class MemberController extends Controller
{
    /**
     * @var MemberAddUsecase
     */
    private $memberAddUsecase;
    
    /**
     * constract
     *
     * @param MemberAddUsecase $memberAddUsecase
     * @return void
     */
    public function __construct(MemberAddUsecase $memberAddUsecase)
    {
        $this->memberAddUsecase = $memberAddUsecase;
    }

    /**
     * 登録
     *
     * @param MemberAddRequest $request
     */
    public function store(MemberAddRequest $request)
    {
        return $this->memberAddUsecase->handle($request);
    }
}
