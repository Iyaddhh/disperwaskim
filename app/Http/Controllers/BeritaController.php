<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    public function index() {
        return view('berita.index');
    }

    public function create() {
        return view('berita.add');
    }

    public function store(Request $request) {
        $rules = [
            'judul_berita' => 'required',
            'deskripsi_berita' => 'required'
        ];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('berita.add')->withInput()->withErrors($validator);
        }
    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
