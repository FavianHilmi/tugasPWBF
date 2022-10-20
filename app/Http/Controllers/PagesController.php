<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function anak(){
        return view('admin/anak');
    }

     function penimbangan(){
        return view('admin/penimbangan');
    }
    
     function ibuhamil() {
        return view('admin/ibuhamil');
    }
    
    function immunisasi(){
        return view('admin/immunisasi');
    }
    
    function vitamin(){
        return view('admin/vitamin');
    }
    
    function datalaporan(){
        return view('admin/datalaporan');
    }
    
    function laporandataibu(){
        return view('admin/laporandataibu');
    }
    
    function laporandataanak(){
        return view('admin/laporandataanak');
    }
    
    function laporanimmunisasi(){
        return view('admin/laporanimmunisasi');
    }
    
    function laporanpenimbangan(){
        return view('admin/laporanpenimbangan');
    }
    
    function artikel(){
        return view('admin/artikel');
    }
    
    function tambahibuhamil(){
        return view('admin/tambahibuhamil');
    }

    public function store(){
        dd(request()->all());
    }
}

