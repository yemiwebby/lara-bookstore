<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            [
                'title' => "Half of a Yellow Sun",
                'author' => "Chimamanda Ngozi Adichie",
                'language' => "English",
                'year_published' => "2006",
                'isbn' => "978-0-00-720028-3"
            ],
            [
                'title' => "Encyclopedia of Pseudoscience:",
                'author' => "William F. Williams",
                'language' => "English",
                'year_published' => "2000",
                'isbn' => "978-1-57958-207-4"
            ],
            [
                'title' => "Things fall apart",
                'author' => "Chinua Achebe",
                'language' => "English",
                'year_published' => "1958",
                'isbn' => "0385474547"
            ],
            [
                'title' => "Tall Tales about the Mind and Brain",
                'author' => "Della Sala",
                'language' => "English",
                'year_published' => "2007",
                'isbn' => "0-19-856877-0"
            ],
            [
                'title' => "Anthills of the Savannah",
                'author' => "Chinua Achebe",
                'language' => "English",
                'year_published' => "1987",
                'isbn' => "0385260458"
            ],
            [
                'title' => "Americanah",
                'author' => "Chimamanda Ngozi Adichie",
                'language' => "English",
                'year_published' => "2013",
                'isbn' => "978-0-307-96212-6"
            ],
        ]);
    }
}
