<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    public function index()
    {
        // get data from database and pass it to the view


        return view('admin.daftar_permohonan_admin');
    }
}
