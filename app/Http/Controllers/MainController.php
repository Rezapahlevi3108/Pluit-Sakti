<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function detail_film() {
        return view('pages.detail-film');
    }

    public function sedang_tayang() {
        return view('pages.sedang-tayang');
    }

    public function terpopuler() {
        return view('pages.terpopuler');
    }

    public function mendatang() {
        return view('pages.mendatang');
    }

    public function genre() {
        return view('pages.genre');
    }
}
