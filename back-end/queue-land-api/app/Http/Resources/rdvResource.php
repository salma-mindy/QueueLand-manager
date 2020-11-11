<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class rdvResource extends JsonResource
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
            'commune' => $this->commune,
            'agence' => $this->agence,
            'date_rdv' => $this->date_rdv, 
            'periode' => $this->periode,
            'description' => $this->description,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'client' => $this->client,
            'feedback' => $this->feedback,
        ];
    }
}
