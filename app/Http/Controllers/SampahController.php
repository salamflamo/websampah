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
use App\Models\Admin;

class SampahController extends Controller
{

    //insert sebelah sini
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


    //update sebelah sini

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


    //select data sebelah sini

    public function table(Request $request)
    {

        if ($request->session()->has('session_name'))
        {
            $jasa = Jasa::all();
            return view('Admin/table', ['jasa' => $jasa]);
        }
        else
        {
            return redirect('/masukadmin');
        }
    }

    public function masyarakat(Request $request)
    {

        if ($request->session()->has('session_name'))
        {
            $mas = Masyarakat::all();
            return view('Admin/masyarakat', ['mas' => $mas]);
        }
        else
        {
            return redirect('/masukadmin');
        }

    }

    public function edit(Request $request, $id)
    {
        $jasa = Jasa::find($id);
        if ($request->session()->has('session_name'))
        {
            return view('Admin/edit', ['jasa' => $jasa]);
        }
        else
        {
            return redirect('/masukadmin');
        }

    }

    public function edit_mas(Request $request, $id)
    {
        $mas = Masyarakat::find($id);
        if ($request->session()->has('session_name'))
        {
            return view('Admin/edit_mas', ['mas' => $mas]);
        }
        else
        {
            return redirect('/masukadmin');
        }

    }

    public function verif(Request $request)
    {
        $admin = DB::table('Admin')->where('id',2)->first();
        $email = $admin->email;
        $password = $admin->password;
        // $cek = Hash::check($request->password, $a);
        // dd([Hash::make($request->password),$a]);
        if (($request->email == $email)&&($request->password == $password)) {
            $request->session()->put('session_name', 'superadmin');
            return redirect('/adminsampah');
        } else {
            return redirect('/masukadmin');
        }

    }


    //delete data

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


    //return view biasa


     public function admin(Request $request)
     {
         if ($request->session()->has('session_name'))
         {
             return view('Admin/dashboard');
         }
         else
         {
             return redirect('/masukadmin');
         }

     }

     public function blank()
     {
       return view('Admin/blank');
     }



    public function register(Request $request)
    {

        if ($request->session()->has('session_name'))
        {
            return view('Admin/register');
        }
        else
        {
            return redirect('/masukadmin');
        }
    }



    public function register_mas(Request $request)
    {
        if ($request->session()->has('session_name'))
        {
            return view('Admin/register_mas');
        }
        else
        {
            return redirect('/masukadmin');
        }

    }

    public function forgetSession(Request $request)
    {
        $request->session()->forget('session_name');
        return redirect('/masukadmin');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function sent()
    {
        return view('sent');
    }

    public function masuk(Request $request)
    {
        if ($request->session()->has('session_name'))
        {
            return redirect('/adminsampah');
        }
        else
        {
            return view('Admin/login');
        }

    }

    public function NiceAdmin()
    {
        return view('NiceAdmin/dashboard');
    }

    public function Tables()
    {
        return view('NiceAdmin/basic_table');
    }
}



//tidak dipakai
/*
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
