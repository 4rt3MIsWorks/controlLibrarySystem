<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index() {
        return view('index');
    }
}
