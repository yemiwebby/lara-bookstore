<?php


namespace App\graphql\Queries;

use App\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class BooksQuery extends Query
{
    protected $attributes = [
        'name' => 'books',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Book'));
    }

    public function resolve($root, $args)
    {
        if (isset($args['id'])) {
            return Book::find($args['id']);
        }

        return Book::all();
    }
}
