<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResursMotor extends JsonResource
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
            'MODEL: ' => $this->resource->model,
            'GODINA PROIZVODNJE: ' => $this->resource->godinaProizvodnje,
            'CENA: ' => $this->resource->cena,
            'PROIZVOĐAČ: ' => new ResursProizvodjac($this->resource->proizvodjac),
            'VLASNIK: ' => new ResursVlasnik($this->resource->vlasnik),
        ];
    }
}
