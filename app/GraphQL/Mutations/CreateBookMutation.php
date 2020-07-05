<?php


namespace App\graphql\Mutations;


use App\Book;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateBookMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createBook'
    ];

    public function type(): Type
    {
        return GraphQL::type('Book');
    }

    public function args(): array
    {
        return [
            'title' => [
                'name' => 'title',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'author' => [
                'name' => 'author',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'language' => [
                'name' => 'language',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'year_published' => [
                'name' => 'year_published',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'isbn' => [
                'name' => 'isbn',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $book = new Book();
        $book->fill($args);
        $book->save();

        return $book;
    }
}
