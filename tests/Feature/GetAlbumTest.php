<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Album;

class GetAlbumTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_get_an_album()
    {
        $this->withoutExceptionHandling();

        $album = Album::factory()->create(['id' => 1, 'name' => 'hola']);

        $response = $this->getJson(route('albums.show', $album));

        $response->assertStatus(200);
    }
}
