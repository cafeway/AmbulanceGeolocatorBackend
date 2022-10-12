<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ambulance extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
        [
            "RegNo"=>$this->RegNo,
            "HospitalName"=>$this->HospitalName,
            "DriversName"=>$this->DriversName,
            "Id"=>$this->Id,
            "PhoneNumber"=>$this->PhoneNumber,
        ];
    }
}
