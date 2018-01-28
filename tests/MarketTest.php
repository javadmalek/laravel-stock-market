<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MarketTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }
    use DatabaseTransactions;
    public function testCompaonyCreation()
    {
        factory(App\Company::class)->create([
            'title' => 'New York Stock Exchange',
            '_user_id' => 1,
        ]);
        $this->seeInDatabase('Companies', [
            'title' => 'New York Stock Exchange',
            '_user_id' => 1,
        ]);

        echo('MarketTest: The Market Test is OK.');
    }
}