<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view('home.index');
    }

    // parametre tanımlaması
    public function test($id) {
        echo "Id number:", $id;
    }
}
