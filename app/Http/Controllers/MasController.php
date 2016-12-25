<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Jasa;
use App\Models\Masyarakat;
use App\Models\Menyampah;


class MasController extends Controller
{
    public function daftar(Request $request)
    {
        $mas = new Masyarakat;
        $mas->nama = $request->nama;
        $mas->email = $request->email;
        $mas->password = Hash::make($request->password);
        $mas->nope = $request->nope;
        $mas->alamat = $request->alamat;
        $mas->kabkot = $request->kabkot;
        $mas->save();
        return redirect('/terimakasih#thanks');
    }

    public function kirim(Request $request)
    {
        $mas = new Menyampah;
        $mas->berat = $request->berat;
        $mas->daerah = $request->daerah;
        $mas->id_mas = $request->session()->get('mas_session');
        $mas->status = 'belum';
        $mas->save();
        return redirect('/masadmin/pesan?berhasil');
    }

    public function kirim_sunting(Request $request,$id)
    {
        $mas = Masyarakat::find($id);
        $mas->nama = $request->nama;
        $mas->email = $request->email;
        $mas->password = Hash::make($request->password);
        $mas->nope = $request->nope;
        $mas->alamat = $request->alamat;
        $mas->kabkot = $request->kabkot;
        $mas->foto = $request->foto;
        $mas->save();
        return redirect('/masadmin');
    }

    public function sunting(Request $request)
    {
        $id = $request->session()->get('mas_session');
        $mas = Masyarakat::find($id);
        if ($request->session()->has('mas_session'))
        {
            return view('Admin/masprofil',['mas' => $mas]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function mas_dashboard(Request $request)
    {
        $massession = $request->session()->has('mas_session');
        if ($massession)
        {
            return view('Admin/mas_admin');
        }
        else
        {
            return redirect('/');
        }
    }

    public function pesan(Request $request)
    {
        $massession = $request->session()->get('mas_session');
        $mass = Masyarakat::find($massession);
        if ($request->session()->has('mas_session'))
        {
            return view('Admin/pesan',['mass' => $mass]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function verif(Request $request)
    {
        $jasa = DB::table('Masyarakat')->where('email', $request->email)->first();
        $cek = Hash::check($request->password, $jasa->password);
        if ($cek) {
            $request->session()->put('mas_session', $jasa->id);
            return redirect('/masadmin');
        } else {
            return redirect('/');
        }
    }

    public function forgetSession(Request $request)
    {
        $request->session()->forget('mas_session');
        return redirect('/');
    }



}
