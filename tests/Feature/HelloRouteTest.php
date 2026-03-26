<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloRouteTest extends TestCase
{
    public function test_hello_route_returns_hello_from_agent(): void
    {
        $response = $this->get('/hello');

        $response->assertStatus(200);
        $response->assertSeeText('Hello from agent');
    }
}
