<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    public function index(){
        return view('praktikuminput');
    }
    public function output(Request $request){
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'skill' => $request->input('skill'),
        ];
        return view('praktikuminput', compact('data'));
    }
}