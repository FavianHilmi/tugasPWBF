<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekKesuburanController extends Controller
{
    public function index()
    {
        return view('CekKesuburan.index', [
            'title' == 'CekKesuburan'
        ]);
    }
}
