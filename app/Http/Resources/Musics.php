<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Musics extends JsonResource
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
            'title' => $this->title,
            'author' => $this->author,
            'album' => $this->album,
            'image' => config('app.url') . '/covers/' . $this->image,
            'url' => $this->url,
        ];
    }
}
