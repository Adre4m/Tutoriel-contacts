<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMany()
    {
        $this->visit('/contact');
    }
}
