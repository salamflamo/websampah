<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengepul;
use App\Models\Masyarakat;
use App\Models\Jasa;
use App\Models\Mengepul;
use App\Models\Menyampah;
use App\Models\Artikel;

class PengepulController extends Controller
{
    public function login(Request $request)
    {
        if ($request->session()->has('peng_session'))
        {
            return redirect('/pengadmin');
        }
        else
        {
            return view('NiceAdmin/loginpeng');
        }
    }

    public function verif(Request $request)
    {
        $pengepul = DB::table('Pengepul')->where('email', $request->email)->first();
        $cek = Hash::check($request->password, $pengepul->password);
        if ($cek) {
            $request->session()->put('peng_session', $pengepul->id);
            return redirect('/pengadmin');
        } else {
            return redirect('/masukpengepul');
        }
    }

    public function dashboard(Request $request)
    {
        if ($request->session()->has('peng_session'))
        {
            $id = $request->session()->get('peng_session');
            $mass = Pengepul::find($id);
            $nama = $mass->namap;
            return view('NiceAdmin/dashboardpeng', ['nama' => $nama]);
        }
        else
        {
            return redirect('/masukpengepul');
        }
    }

    public function TabelMengepul(Request $request)
    {
        if ($request->session()->has('peng_session'))
        {
            $id = $request->session()->get('peng_session');
            $mass = Pengepul::find($id);
            $nama = $mass->namap;
            $mengepul = Mengepul::paginate(4);
            return view('NiceAdmin/pengtabel', ['nama' => $nama, 'mengepul' => $mengepul]);
        }
        else
        {
            return redirect('/masukpengepul');
        }
    }

    public function ubah(Request $request,$id)
    {
        $ids = $request->session()->get('peng_session');
        DB::table('Mengepul')
            ->where('id',$id)
            ->update(['status' => 'Lunas', 'id_pengepul' => $ids]);
        return redirect('pengadmin/mengepul');
    }

    public function Posting(Request $request)
    {
        $idd = $request->session()->get('peng_session');
        $a = Pengepul::find($idd);
        $nama = $a->namap;
        if ($request->session()->has('peng_session'))
            return view('NiceAdmin/pengposting',['nama' => $nama]);
        else
            redirect('/masukpengepul');
    }

    public function create_posting(Request $request)
    {
        $idd = $request->session()->get('peng_session');
        $a = Pengepul::find($idd);
        $posting = new Artikel;
        $posting->judul = $request->judul;
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $request->file('image')->move('imageartikel', $filename);
        $posting->gambar = $filename;
        $posting->artikel = $request->artikel;
        $posting->oleh = $a->namap;
        $posting->id_pengepul = $idd;
        $posting->save();
        return redirect('/pengadmin/tabelposting');
    }

    public function DaftarPosting(Request $request)
    {
        if ($request->session()->has('peng_session'))
        {
            $id = $request->session()->get('peng_session');
            $a = Pengepul::find($id);
            $nama = $a->namap;
            $posting = Artikel::where('id_pengepul','=',$id)->paginate(3);
            return view('NiceAdmin/pengtableposting',['nama' => $nama, 'posting' => $posting]);
        }
        else
            return redirect('/masuk');
    }

    public function forget(Request $request)
    {
        $request->session()->forget('peng_session');
        return redirect('masukpengepul');
    }
}
