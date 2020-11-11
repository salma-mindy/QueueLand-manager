<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class communeResource extends JsonResource
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
            'id' => $this->id,
            'nom_commune' => $this->nom_commune,
            'lng' => $this->lng,
            'lat' => $this->lat, 
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
