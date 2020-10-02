<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //コントローラのテスト

        //rootpathに問題なくアクセス出来ているか
        //$this->get('/')->assertStatus(200);
        //helloに正常にアクセスできるか
        //$this->get('/hello')->assertOK();
        //hogeという存在しないページにアクセスした際に404でページが検出されるか
        //$this->get('/hoge')->assertStatus(404);
        //指定したpathに<h1>が含まれているか
        //$this->get('/hello')->assertSee('<h1>');
        //指定したpathに用意したテキストが順に従って登場することを確認
        //$this->get('/hello')->assertSeeInOrder(['<html','<head','<body','<h1>']);

        for($i = 0;$i < 100;$i++)
        {
            factory(UserTest::class)->create();
        }
        $count = UserTest::get()->count();
        $usertest = UserTest::find(rand(1, $count));
        $data = $
    }
}
