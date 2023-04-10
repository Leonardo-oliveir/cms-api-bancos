<?php

namespace Tests\Feature;

use App\Http\Controllers\V1\Controller;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_createModule()
    {
        $response = new Controller();

        $response->CreateModule(5, 1, 'asd');

        $response->assertTrue(true);
    }
}
