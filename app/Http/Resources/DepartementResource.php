<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartementResource extends JsonResource
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
            'nom' => $this->nom,
            'image' => $this->image,
            'sites' => SiteResource::collection($this->whenLoaded('site')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

    }
}
