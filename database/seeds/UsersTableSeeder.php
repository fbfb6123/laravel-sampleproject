<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = ['田中太郎','山田太郎','佐藤太郎'];
        foreach ($authors as $author) {
            DB::table(
                'users')->insert([
                'name' => $author,
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('password'),
            ]);
          }
        }
    }
