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

  /*  public function itStoresFile(){
        Storage::fake('files');
        $response = $this->json('POST', '/calculateSalary', [
            'salary' => UploadedFile::fake()->create('sar.txt')
        ]);

        Storage::disk('files')->assertExists('salary.txt');
    }*/

    
}
