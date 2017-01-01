<?php

namespace App\Http\Controllers;

use App\Models\Pengepul;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Models\Jasa;
use App\Models\Masyarakat;
use App\Models\Artikel;
use App\Models\Komentar;
use App\Models\Admin;
use Illuminate\Support\Facades\Input;

class SampahController extends Controller
{

    //insert sebelah sini
    public function create(Request $request)
    {
        $jasa = new Masyarakat;
        $jasa->nama = $request->nama;
        $jasa->email = $request->email;
        $jasa->password = Hash::make($request->password);
        $jasa->nope = $request->nope;
        $jasa->alamat = $request->alamat;
        $jasa->kabkot = $request->kabkot;

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $request->file('image')->move('images', $filename);

        $jasa->foto = $filename;
        $jasa->save();
        return redirect('/adminsampah/table');
    }

    public function create_jasa(Request $request)
    {
        $jasa = new Jasa;
        $jasa->nama = $request->nama;
        $jasa->email = $request->email;
        $jasa->password = Hash::make($request->password);
        $jasa->nope = $request->nope;
        $jasa->alamat = $request->alamat;
        $jasa->kabkot = $request->kabkot;

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $request->file('image')->move('images', $filename);

        $jasa->foto = $filename;
        $jasa->save();
        return redirect('/adminsampah/table');
    }

    public function create_pengepul(Request $request)
    {
        $jasa = new Pengepul;
        $jasa->nama = $request->nama;
        $jasa->email = $request->email;
        $jasa->password = Hash::make($request->password);
        $jasa->nope = $request->nope;
        $jasa->alamat = $request->alamat;
        $jasa->kabkot = $request->kabkot;

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $request->file('image')->move('images', $filename);

        $jasa->foto = $filename;
        $jasa->save();
        return redirect('/adminsampah/table#pengepul');
    }

    public function create_posting(Request $request)
    {
        $posting = new Artikel;
        $posting->judul = $request->judul;

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $request->file('image')->move('imageartikel', $filename);
        $posting->gambar = $filename;
        $posting->artikel = $request->artikel;
        $posting->save();
        return redirect('/adminsampah/daftarposting');
    }

    /**
     * @param Request $request
     */
    public function create_komentar(Request $request)
    {
        $komentar = new Komentar;
        $komentar->nama = $request->nama;
        $komentar->email = $request->email;
        $komentar->komentar = $request->komen;
        $komentar->save();
        return redirect('/?berhasil');
    }

//    public function create_mas(Request $request)
//    {
//        $mas = new Masyarakat;
//        $mas->nama = $request->nama;
//        $mas->email = $request->email;
//        $mas->password = Hash::make($request->password);
//        $mas->nope = $request->nope;
//        $mas->alamat = $request->alamat;
//        $mas->kabkot = $request->kabkot;
//        $mas->foto = $request->foto;
//        $mas->save();
//        return redirect('/adminsampah/masyarakat');
//    }


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
            $masyarakat = Masyarakat::all();
            $pengepul = Pengepul::all();
            return view('NiceAdmin/basic_table', ['jasa' => $jasa, 'masyarakat' => $masyarakat, 'pengepul' => $pengepul]);
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

    public function DaftarPosting(Request $request)
    {
        if ($request->session()->has('session_name'))
        {
            $posting = Artikel::all();
            return view('NiceAdmin/table_posting', ['posting' => $posting]);
        }

        else
            return redirect('/masukadmin');
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

    public function admin(Request $request)
    {
        if ($request->session()->has('session_name'))
        {
            $komen = Komentar::all();
             return view('NiceAdmin/dashboard', ['komen' => $komen]);
         }
        else
        {
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
    

     public function blank()
     {
       return view('Admin/blank');
     }



    public function register(Request $request)
    {

        if ($request->session()->has('session_name'))
        {
            return view('NiceAdmin/forms');
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
            return view('NiceAdmin/login');
        }

    }

    
    public function Posting(Request $request)
    {
        if ($request->session()->has('session_name'))
            return view('NiceAdmin/posting');
        else
            return redirect('/masukadmin');
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
