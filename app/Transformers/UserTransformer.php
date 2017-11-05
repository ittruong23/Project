<?php

namespace App\Transformers;

use League\Fractal;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use PhpParser\Builder\Use_;
use App\User;


class UserTransformer extends TransformerAbstract
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
    protected $defaultIncludes = ['caterogy'];

    /**
     * Transform object into a generic array
     *
     * @var $resource
     * @return array
     */
    public function transform(User $user)
    {
        return [

            'id' => $user->id,
			'username' => $user->username,
            'email' => $user->email,
        ];
    }
    
    public function includeCaterogy(User $user) {
        return $this->collection($user->caterogy, new CatetogyTransformer());
    }
}
