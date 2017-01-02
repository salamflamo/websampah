<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Jasa;
use App\Models\Masyarakat;
use App\Models\Menyampah;


class JasController extends Controller
{
    public function jas_admin(Request $request)
    {
        if ($request->session()->has('jas_session'))
            return view('NiceAdmin/');
        else
            return redirect('/masuk');
    }

    public function jas_table(Request $request)
    {
        if ($request->session()->has('jas_session'))
        {
            $trans = DB::table('Menyampah')
                ->join('Masyarakat', 'Menyampah.id_mas','=','Masyarakat.id')
                ->select('Menyampah.*','Masyarakat.nama')
                ->get();
            return view('Admin/jas_table',['trans' => $trans]);
        }

        else
        {
            return redirect('/masuk');
        }

    }

    public function masuk(Request $request)
    {
        if ($request->session()->has('jas_session'))
            return redirect('/jasadmin');
        else
            return view('NiceAdmin/loginjas');
    }

    public function keluar(Request $request)
    {
        $request->session()->forget('jas_session');
        return redirect('/masuk');
    }
    public function verif(Request $request)
    {
        $jasa = DB::table('Jasa')->where('email',$request->email)->first();
        $cek = Hash::check($request->password,$jasa->password);
        if ($cek)
        {
            $request->session()->put('jas_session',$jasa->id);
            return redirect('/jasadmin');
        }
    }

    public function ubah(Request $request,$id)
    {
        $ids = $request->session()->get('jas_session');
        DB::table('Menyampah')
            ->where('id',$id)
            ->update(['status' => 'sudah', 'id_jas' => $ids]);
        return redirect('jasadmin/table');
    }
}
