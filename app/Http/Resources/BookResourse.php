<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {


        foreach ($this->authors as $author) {
            $authors[] = $author;
        }

        return [
            'title' => $this->title,
            'image' => $this->image,
            'description' => $this->description,
            'authors' => $authors
        ];
    }
}
