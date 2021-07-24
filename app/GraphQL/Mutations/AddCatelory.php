<?php

namespace App\GraphQL\Mutations;

use App\Catelory;

class AddCatelory
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function resolve($_, array $args)
    {
        $catelory = new Catelory();
        $catelory->fill($args);
        $catelory->save();
        return [
            'data' => $catelory,
            'status' => 'SUCCESS',
        ];
    }
}
