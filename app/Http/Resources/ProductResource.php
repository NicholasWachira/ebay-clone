<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id'=> $this->id,
            'title'=> $this->title,
            'slug'=> $this->slug,
            'price'=> $this->price,
            'condition'=> $this->condition,
            'image'=> $this->getFirstMediaUrl('product-images'),
            'main'=> $this->getFirstMediaUrl('product-images', 'main'),
            'thumb'=> $this->getFirstMediaUrl('product-images', 'thumb')
        ];
    }
}
