<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function PostTest()
    {
       $response = $this->withHeaders([
            'content-tpe' => 'application/json',
        ])->json('POST', 'api/products', ['name' => 'glassess']);

        $response->assertStatus(200);
        $this->assertTrue(true);
    }

    /**
     * @test
     * @return void
     */
    public function PostFalseNameTest()
    {
       $response = $this->withHeaders([
            'content-tpe' => 'application/json',
        ])->json('POST', 'api/products', ['name' => 'smart-phone']);

        $response->assertStatus(400);
        $this->assertTrue(true);
    }

    /**
     * @test
     * @return void
     */
    public function PostNoNameTest()
    {
       $response = $this->withHeaders([
            'content-tpe' => 'application/json',
        ])->json('POST', 'api/products', []);

        $response->assertStatus(400);
        $this->assertTrue(true);
    }
}
