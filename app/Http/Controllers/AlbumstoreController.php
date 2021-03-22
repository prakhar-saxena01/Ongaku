<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumstoreController extends Controller {

    public function index() {
        return view('album-store');
    }
}
