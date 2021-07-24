<?php

namespace App\GraphQL\Mutations;
use App\Catelory;

class UpdateCatelory
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function resolve($_, array $args)
    {
          
        $catelory = Catelory::findOrFail($args['id']);
        $catelory->fill($args);
        $catelory->save($args);

        return [
            'data' => $catelory,
            'status' => 'SUCCESS',
        ];
    }
}
