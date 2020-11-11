<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class feedbackResource extends JsonResource
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
            'client_id' => $this->client_id,
            'rdv_id' => $this->rdv_id,
            'note' => $this->note,
            'avis' => $this->avis,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'rdv' => $this->rdv,
        ];
    }
}
