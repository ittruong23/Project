<?php

namespace App\Transformers;

use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use App\Caterogy;


class CatetogyTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [];

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * Transform object into a generic array
     *
     * @var $resource
     * @return array
     */
    public function transform(Caterogy $category)
    {
        return [
            'id' => $category->id,
            'title' => $category->title,
            'created_at' => $category->created_at->format('d-m-Y'),
            'updated_at' => $category->updated_at->format('d-m-Y'),
        ];
    }
    
    public function includeAuthor(Caterogy $category) {
        return $this->collection($category->author, new UserTransformer());
    }
}
