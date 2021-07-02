<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Album;

class GetAlbumsTest extends TestCase
{
    use RefreshDatabase;
    public function test_get_albums()
    {
        $this->withoutExceptionHandling();
        $album = Album::factory()->create();

        $response = $this->getJson(route('albums.index', $album), $album->toArray());
        

        $response->assertStatus(200);
    }
}
