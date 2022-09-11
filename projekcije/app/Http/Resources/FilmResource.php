<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    public static $wrap='Film';


    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'title' =>$this->resource->title,
            'description' => $this->resource->description,
            'genre'=>new GenreResource($this->resource->genre),
            'user'=>new UserResource($this->resource->user)
        ];
    }
}
