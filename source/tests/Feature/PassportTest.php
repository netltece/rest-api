<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PassportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPassportsAny()
    {
        $response = $this->get('/passports');

        $response->assertStatus(200);
    }
}
