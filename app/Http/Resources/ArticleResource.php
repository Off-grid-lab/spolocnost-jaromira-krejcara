<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'heading' => $this->getTranslations('heading'),
            'title' => $this->getTranslations('title'),
            'slug' => $this->getTranslations('slug'),
            'content' => $this->getTranslations('content'),
            'images' => MediaResource::collection($this->getMedia('images')),
        ];
    }
}
