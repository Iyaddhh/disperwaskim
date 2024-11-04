<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    //
    public function index() {
        $response = Mahasiswa::with(['user', 'prodi'])->get();
        
        return ['data' => $response];
    }

    public function create() {
        $prodi = Prodi::all();

        return view('mahasiswa.add', ['prodi' => $prodi]);
    }

    public function store(Request $request) {
        $user = new User;

        $user->name = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        $user = User::where('email', $request->input('email'))->first();

        $mhs = new Mahasiswa;

        $mhs->user_id = $user->id;
        $mhs->prodi_id = $request->input('prodi');
        $mhs->nim = $request->input('nim');
        $mhs->jenis_kelamin = $request->input('jenis_kelamin');
        $mhs->hp = $request->input('hp');
        $mhs->kelas = $request->input('kelas');

        $mhs->save();

        return [];
    }

    public function destroy($id) {
        $mhs = Mahasiswa::find($id);
        
        $mhs->delete();

        $user = User::where('id', $mhs->user_id);

        $user->delete();

        return [];
    }
}
