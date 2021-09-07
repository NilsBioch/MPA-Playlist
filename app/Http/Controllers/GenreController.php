<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Genre;

class GenreController extends Controller
{
    //
    public function index(){
        $genres = Genre::all();
        return view('Genre', ['genres' => $genres]);
    }
}


