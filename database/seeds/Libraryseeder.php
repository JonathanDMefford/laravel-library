<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class Libraryseeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Book::class, 20)->create();
        factory(App\Author::class, 8)->create();
        factory(App\User::class, 10)->create();

        $bookamount = 10;
        for ($i = 1; $i < $bookamount; $i++) {
            DB::table('book_author')->insert([
                'book_id' => $i,
                'author_id' => rand(1, 8)
            ]);
        }
    }
}