<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
 public function index() {
     $albums = Album::all();
     return response()->json($albums, 200);
 }
}
