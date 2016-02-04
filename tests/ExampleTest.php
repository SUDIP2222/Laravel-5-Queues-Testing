<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
            // ->see('Laravel 5');
            ->type('some query','#search')
            ->press('Search')
            ->see('Search results For "some query"')
            ->seePageIs('/search-results');
    }
}
