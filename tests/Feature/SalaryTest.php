<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SalaryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /** @test */
    public function itLoadsIndexPage(){
        $response = $this->get('/');
        $response->assertSee('Welcome to Salary Calculator!!');
    }

    
}
