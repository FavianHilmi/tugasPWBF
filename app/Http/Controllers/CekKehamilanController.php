<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekKehamilanController extends Controller
{
    public function index()
    {
        return view('CekKehamilan.index', [
            'title' == 'CekKehamilan'
        ]);
    }
}
