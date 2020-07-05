<?php

namespace App\graphql\Mutations;

use App\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class DeleteBookMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteBook',
        'description' => 'Delete a book'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }


    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $book = Book::findOrFail($args['id']);

        return  $book->delete() ? true : false;
    }
}
