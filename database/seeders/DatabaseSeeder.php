<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(BookTypeSeeder::class);
        $this->call(BookTransactionSeeder::class);
        $this->call(StudentSeeder::class);
    }
}
