<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'set_id' => $this->set_id,
            'h1' => $this->h1,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'video' => $this->video,
            'intro' => $this->intro,
            'url' => $this->url,
            'status_id' => $this->status_id,
            'category_id' => $this->category_id,
            'count_films' => $this->count_films,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at 
        ];
    }
}
