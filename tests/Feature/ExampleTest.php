<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Fernando Pacheco',
            'email' => 'fpacheco@dgae.com.mx',
        ]);



        $this->actingAs($user, 'api')
            ->get('api/user')
            ->AssertSee('Fernando Pacheco')
            ->AssertSee('fpacheco@dgae.com.mx');
    }
}
