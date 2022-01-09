<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PokemonResource extends JsonResource
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
                'id' => $this->id,
                'name' => $this->name,
                'height' => $this->height,
                'weight' => $this->weight,
                'base_experience' => $this->base_experience,
                'base_stats' => $this->base_stats,
                'habitat' => $this->habitats,
                'image' => env('APP_URL', false) . ':' . env('APP_PORT', false) . '/img/pokemon/' . $this->images->image,
                'types' => $this->types,
        ];
    }
}
