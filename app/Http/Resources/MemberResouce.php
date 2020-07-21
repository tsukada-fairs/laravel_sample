<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (int)$this->id,
            'email' => $this->email,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'last_name_kana' => $this->last_name_kana,
            'first_name_kana' => $this->first_name_kana,
            'sex' => (int)$this->sex,
            'birthday' => $this->birthday,
            'post_code' => $this->post_code,
            'addr1' => $this->addr1,
            'addr2' => $this->addr2,
            'addr3' => $this->addr3,
            'addr4' => $this->addr4,
            'tel1' => $this->tel1,
            'tel2' => $this->tel2,
            'height' => (int)$this->height,
            'weight' => (int)$this->weight
        ];
    }
}
