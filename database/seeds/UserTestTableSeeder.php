<?php

use Illuminate\Database\Seeder;

class UserTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = ['テスト太郎','テスト子'];
        foreach ($authors as $author) {
            DB::table(
                'usertest')->insert([
                'name' => $author,
                'mail' => Str::random(10) . '@gmail.com',
                'age' => 25,
            ]);
        }
    }
}
