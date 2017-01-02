<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Mengepul;
use App\Models\Pengepul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Models\Jasa;
use App\Models\Masyarakat;
use App\Models\Menyampah;


class JasController extends Controller
{
    public function jas_admin(Request $request)
    {
        $id = $request->session()->get('jas_session');
        $jasa = Jasa::find($id);
        $nama = $jasa->namaj;
        if ($request->session()->has('jas_session'))
        {
            return view('NiceAdmin/dashboardjas',['nama' => $nama]);
        }

        else
            return redirect('/masuk');
    }

    public function jas_table(Request $request)
    {
        if ($request->session()->has('jas_session'))
        {
            $id = $request->session()->get('jas_session');
            $jasa = Jasa::find($id);
            $nama = $jasa->namaj;
            $menyampah = DB::table('Menyampah')
                ->join('Masyarakat', 'Menyampah.id_mas','=','Masyarakat.id')
                ->select('Menyampah.*','Masyarakat.namam')
                ->paginate(4);
            $mengepul = DB::table('Mengepul')
                ->join('Pengepul','Mengepul.id_pengepul','=','Pengepul.id')
                ->select('Mengepul.*','Pengepul.kabkot')
                ->where('Mengepul.id_pemesan','=',$id)
                ->paginate(4);
            return view('NiceAdmin/jastabel',['menyampah' => $menyampah,'mengepul' => $mengepul, 'nama' => $nama]);
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
//        $jasa = DB::table('Jasa')->where('email','=',$request->email)->first();
//        $pass = $jasa->password;
//        $cek = Hash::check($request->password,$pass);
        $validate_admin = DB::table('Jasa')
            ->select('id','email','password')
            ->where('email', Input::get('email'))
            ->first();
        if ($validate_admin && Hash::check(Input::get('password'), $validate_admin->password))
        {
            $request->session()->put('jas_session',$validate_admin->id);
            return redirect('/jasadmin');
        }
        else
        {
            return redirect('/masuk');
        }
    }

    public function ubah(Request $request,$id)
    {
        $ids = $request->session()->get('jas_session');
        DB::table('Menyampah')
            ->where('id',$id)
            ->update(['status' => 'sudah', 'id_jas' => $ids]);
        return redirect('jasadmin/transaksi');
    }

    public function DaftarMengepul(Request $request)
    {
        if($request->session()->has('jas_session'))
        {
            $pengepul = Pengepul::paginate(4);
            $idd = $request->session()->get('jas_session');
            $mass = Jasa::find($idd);
            $nama = $mass->namaj;
            return view('NiceAdmin/jasdaftarpengepul', ['nama' => $nama, 'pengepul' => $pengepul]);
        }
        else
        {
            return redirect('/masuk');
        }
    }

    public function Mengepul(Request $request, $id)
    {
        if($request->session()->has('jas_session'))
        {
            $pengepul = Pengepul::find($id);
            $idd = $request->session()->get('jas_session');
            $mass = Jasa::find($idd);
            $nama = $mass->namam;
            return view('NiceAdmin/jasmengepul', ['nama' => $nama, 'pengepul' => $pengepul]);
        }
        else
        {
            return redirect('/masuk');
        }
    }

    public function KirimMengepul(Request $request, $id)
    {
        $idd = $request->session()->get('jas_session');
        $pemesan = Jasa::find($idd);
        $mengepul = new Mengepul;
        $mengepul->jenis = $request->jenis;
        $mengepul->berat = $request->berat;
        $mengepul->oleh = $pemesan->namaj;
        $mengepul->status = "Belum";
        $mengepul->id_pemesan = $idd;
        $mengepul->id_pengepul = $id;
        $mengepul->save();
        return redirect('/jasadmin/transaksi');
    }

    public function create_posting(Request $request)
    {
        $idd = $request->session()->get('jas_session');
        $a = Jasa::find($idd);
        $posting = new Artikel;
        $posting->judul = $request->judul;
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $request->file('image')->move('imageartikel', $filename);
        $posting->gambar = $filename;
        $posting->artikel = $request->artikel;
        $posting->oleh = $a->namaj;
        $posting->id_jas = $idd;
        $posting->save();
        return redirect('/jasadmin/tableposting');
    }

    public function Posting(Request $request)
    {
        $idd = $request->session()->get('jas_session');
        $a = Jasa::find($idd);
        $nama = $a->namaj;
        if ($request->session()->has('jas_session'))
            return view('NiceAdmin/jasposting',['nama' => $nama]);
        else
            redirect('/masuk');
    }

    public function DaftarPosting(Request $request)
    {
        if ($request->session()->has('jas_session'))
        {
            $idd = $request->session()->get('jas_session');
            $a = Jasa::find($idd);
            $nama = $a->namaj;
            $posting = Artikel::where('id_jas','=',$idd)->paginate(3);
            return view('NiceAdmin/jastableposting',['nama' => $nama, 'posting' => $posting]);
        }
        else
            return redirect('/masuk');
    }

    public function ndaftarjasa(Request $request)
    {
        if ($request->session()->has('jas_session'))
            return redirect('/jasadmin');
        else
            return view('NiceAdmin/ndaftarjasa');
    }

    public function daftarkan(Request $request)
    {
        $jasa = new Jasa;
        $jasa->namaj = $request->nama;
        $jasa->email = $request->email;
        $jasa->password = Hash::make($request->password);
        $jasa->nope = $request->nope;
        $jasa->alamat = $request->alamat;
        $jasa->kabkot = $request->kabkot;
        if ($request->hasFile('foto'))
        {
            $file = $request->file('foto');
            $filename = $file->getClientOriginalName();
            $request->file('foto')->move('imagejasa', $filename);
            $jasa->foto = $filename;
        }
        $jasa->save();
        return redirect('/masuk?sukses');
    }

}
