<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dummy;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Jasa;
use App\Models\Masyarakat;
use App\Models\Menyampah;

class SampahController extends Controller
{

    public function index()
    {
        $koding = 'h1{color: #2ab27b}';
        $dummy = dummy::all();

        return view('data/coba', ['koding' => $koding, 'dummy' => $dummy ]);
    }

    public function data($id)
    {
        $n = 'Sesuatu yah ';
        $jasa = 'Fiona';
        $dummy = dummy::find($id);
        return view('data/data', ['data' => $n, 'jasa' => $jasa, 'dummy' => $dummy] );
    }

     public function admin()
     {
         $value = session('key');
       return view('Admin/dashboard');
     }

     public function blank()
     {
       return view('Admin/blank');
     }

    public function table()
    {
        $jasa = Jasa::all();
        return view('Admin/table', ['jasa' => $jasa]);
    }

    public function masyarakat()
    {
        $mas = Masyarakat::all();
        return view('Admin/masyarakat', ['mas' => $mas]);
    }

    public function register()
    {
        return view('Admin/register');
    }

    public function create(Request $request)
    {
        $jasa = new Jasa;
        $jasa->nama = $request->nama;
        $jasa->email = $request->email;
        $jasa->password = Hash::make($request->password);
        $jasa->nope = $request->nope;
        $jasa->alamat = $request->alamat;
        $jasa->kabkot = $request->kabkot;
        $jasa->foto = $request->foto;
        $jasa->save();
        return redirect('/adminsampah/table');
    }

    public function register_mas()
    {
        return view('Admin/register_mas');
    }

    public function create_mas(Request $request)
    {
        $mas = new Masyarakat;
        $mas->nama = $request->nama;
        $mas->email = $request->email;
        $mas->password = Hash::make($request->password);
        $mas->nope = $request->nope;
        $mas->alamat = $request->alamat;
        $mas->kabkot = $request->kabkot;
        $mas->foto = $request->foto;
        $mas->save();
        return redirect('/adminsampah/masyarakat');
    }

    public function daftar(Request $request)
    {
        $mas = new Masyarakat;
        $mas->nama = $request->nama;
        $mas->email = $request->email;
        $mas->password = Hash::make($request->password);
        $mas->nope = $request->nope;
        $mas->alamat = $request->alamat;
        $mas->kabkot = $request->kabkot;
//        $mas->foto = $request->foto;
        $mas->save();
        return redirect('/terimakasih#thanks');
    }

    public function edit($id)
    {
        $jasa = Jasa::find($id);
        return view('Admin/edit', ['jasa' => $jasa]);
    }

    public function edit_mas($id)
    {
        $mas = Masyarakat::find($id);
        return view('Admin/edit_mas', ['mas' => $mas]);
    }

    public function update(Request $request, $id)
    {
        $jasa = Jasa::find($id);
        $jasa->nama = $request->nama;
        $jasa->email = $request->email;
        $jasa->password = $request->password;
        $jasa->nope = $request->nope;
        $jasa->alamat = $request->alamat;
        $jasa->kabkot = $request->kabkot;
        $jasa->foto = $request->foto;
        $jasa->save();
        return redirect('/adminsampah/table');
    }

    public function update_mas(Request $request, $id)
    {
        $mas = Masyarakat::find($id);
        $mas->nama = $request->nama;
        $mas->email = $request->email;
        $mas->password = $request->password;
        $mas->nope = $request->nope;
        $mas->alamat = $request->alamat;
        $mas->kabkot = $request->kabkot;
        $mas->foto = $request->foto;
        $mas->save();
        return redirect('/adminsampah/masyarakat');
    }

    public function delete_jasa($id)
    {
        $jasa = Jasa::find($id);
        $jasa->delete();
        return redirect('/adminsampah/table');
    }

    public function delete_mas($id)
    {
        $jasa = Masyarakat::find($id);
        $jasa->delete();
        return redirect('/adminsampah/masyarakat');
    }

    public function verif(Request $request)
    {
        $jasa = DB::table('Jasa')->where('email',$request->email)->first();
        $cek = Hash::check($request->password,$jasa->password);
        if ($cek)
        {
            $value = $request->session()->get('key');
            return redirect()->intended('/adminsampah');
        }
        else
        {
            return redirect('/masuk');
        }

    }

    public function thanks()
    {
        return view('thanks');
    }

    public function sent()
    {
        return view('sent');
    }

    public function masuk()
    {
        return view('Admin/login');
    }
}
