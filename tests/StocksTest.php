<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StocksTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

    use DatabaseTransactions;
    public function testStockCreation()
    {
        factory(App\Stock::class)->create([
            'type' => 'PREFERRED',
            'price' => 50,
            '_user_id' => 1,
            '_company_id' => 1,
            '_market_id' => 1,
        ]);
        $this->seeInDatabase('Stocks', [
            'type' => 'PREFERRED',
            'price' => 50,
            '_user_id' => 1,
            '_company_id' => 1,
            '_market_id' => 1,
        ]);

        echo('StocksTest: The Stocks Test is OK.');
    }
}
