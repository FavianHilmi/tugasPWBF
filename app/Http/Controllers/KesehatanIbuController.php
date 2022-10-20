<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesehatanIbuController extends Controller
{
    public function index()
    {
        return view('KesehatanIbu.index', [
            'title' == 'KesehatanIbu'
        ]);
    }
}
