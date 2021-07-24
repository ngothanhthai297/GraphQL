<?php

namespace App\GraphQL\Mutations;
use App\Catelory;

class DeleteCatelory
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function resolve($_, array $args)
    {
         // }
         $catelory = Catelory::findOrFail($args['id']);

         $catelory->delete();
 
         return [
             'data' => $catelory,
             'status' => 'SUCCESS',
         ];
    }
}
