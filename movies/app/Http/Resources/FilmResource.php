<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;



class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = 'films';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'ime' => $this->resource->ime,
            'zanr' => $this->resource->zanr,
            'user' => new UserResource($this->resource->user),
            'glumac' => $this->resource->glumac,
            'reziser' => new ReziserResource($this->resource->reziser)
        ];
    }
}