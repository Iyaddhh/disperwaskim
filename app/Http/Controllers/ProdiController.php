<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    //
    public function index() {
        $response = Prodi::all();
        
        return ['data' => $response];
    }
}
