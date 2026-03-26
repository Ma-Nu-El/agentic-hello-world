<?php

namespace Tests\Feature;

use Tests\TestCase;

class PingRouteTest extends TestCase
{
    public function test_ping_route_returns_pong(): void
    {
        $response = $this->get('/ping');

        $response->assertStatus(200);
        $response->assertSeeText('pong');
    }
}
