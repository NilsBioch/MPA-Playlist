<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GenreController extends Controller
{
    //
    public function index(){
        $genres = DB::table('genres')->get();

        return view('Genre', ['genres' => $genres]);
    }
}


