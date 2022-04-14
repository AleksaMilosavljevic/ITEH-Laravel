<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursProizvodjac extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID: ' => $this->resource->id,
            'KOMPANIJA: ' => $this->resource->kompanija,
            'GODINA OSNIVANJA: ' => $this->resource->godinaOsnivanja,
            'WEBSITE: ' => $this->resource->website
        ];
    }
}
