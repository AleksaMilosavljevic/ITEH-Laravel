<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursVlasnik extends JsonResource
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
            'IME I PREZIME: ' => $this->resource->imePrezime,
            'ADRESA: ' => $this->resource->adresa,
            'ISKUSTVO: ' => $this->resource->iskustvo . ' godina vožnje'
        ];
    }
}
