<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class kelasController extends Controller
{
    public function index() {
        $data['result'] = Kelas::all();
        return view('kelas/index')->with($data);
    }
}
