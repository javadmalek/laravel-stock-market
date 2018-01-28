<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CompanyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    use DatabaseTransactions;
    public function testCompanyCreation()
    {
        factory(App\Company::class)->create([
            'title' => 'SANYR SRL-test',
            '_user_id' => 1,
        ]);
        $this->seeInDatabase('Companies', [
            'title' => 'SANYR SRL-test',
            '_user_id' => 1,
        ]);

        echo('CompanyTest: The Companies Test is OK.');
    }
}
