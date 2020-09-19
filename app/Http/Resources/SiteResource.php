<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SiteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $departement=$this->whenLoaded('departement');
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'description' => $this->description,
            'image' => $this->image,
            'rating' => $this->rating,
            'departement_id ' => $this->departement_id ,
            'sites' => new DepartementResource($this->departement),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
