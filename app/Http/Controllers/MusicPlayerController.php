<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicPlayerController extends Controller {

    public function musicplayer() {

        return view('musicplayer');
    }
}
