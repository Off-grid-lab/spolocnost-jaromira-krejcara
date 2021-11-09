<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsListResource extends JsonResource
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
            'title' => $this->getTranslations('title'),
            'perex' => $this->getTranslations('perex'),
            'date' => $this->date,
            'image' => new MediaResource($this->getFirstMedia('images')),
            'tags' => $this->tags,
        ];
    }
}
