<?php

namespace App\Http\Controllers;

use App\Models\Pengepul;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\Jasa;
use App\Models\Masyarakat;
use App\Models\Menyampah;
use App\Models\Mengepul;


class MasController extends Controller
{
    public function daftar(Request $request)
    {
        $mas = new Masyarakat;
        $mas->namam = $request->nama;
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
        return redirect('/masadmin/menyampah?berhasil');
    }

    public function kirim_sunting(Request $request,$id)
    {
        $mas = Masyarakat::find($id);
        $mas->namam = $request->nama;
        $mas->email = $request->email;
        $mas->password = Hash::make($request->password);
        $mas->nope = $request->nope;
        $mas->alamat = $request->alamat;
        $mas->kabkot = $request->kabkot;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('images', $filename);
            $mas->foto = $filename;
        }
        $mas->save();
        return redirect('/masadmin/profile');
    }

    public function sunting(Request $request)
    {

        if ($request->session()->has('mas_session'))
        {
            $id = $request->session()->get('mas_session');
            $nama = Masyarakat::find($id);
            return view('NiceAdmin/masprofile',['nama' => $nama]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function mas_table(Request $request)
    {
        if($request->session()->has('mas_session'))
        {
            $id = $request->session()->get('mas_session');
//            $menyampah = Menyampah::where('id_mas', $id)->paginate(6);
            $nama = Masyarakat::find($id);
            $menyampah = DB::table('Menyampah')->where('id_mas','=',$id)->paginate(4);
            $mengepul = DB::table('Mengepul')
                ->join('Pengepul', 'Mengepul.id_pengepul','=','Pengepul.id')
                ->select('Mengepul.*','Pengepul.kabkot')
                ->paginate(4);
            return view('NiceAdmin/mastabel', ['menyampah' => $menyampah,'mengepul' => $mengepul, 'nama' => $nama]);
        }
        else
        {
            return redirect('/');
        }
    }


    public function Pengepul(Request $request)
    {
        if($request->session()->has('mas_session'))
        {
            $id = $request->session()->get('mas_session');
            $nama = Masyarakat::find($id);
            $pengepul = Pengepul::paginate(6);
            return view('NiceAdmin/daftarpengepul', ['pengepul' => $pengepul, 'nama' => $nama]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function Mengepul(Request $request, $id)
    {
        if($request->session()->has('mas_session'))
        {
            $pengepul = Pengepul::find($id);
            $idd = $request->session()->get('mas_session');
            $nama = Masyarakat::find($idd);
            return view('NiceAdmin/masmengepul', ['nama' => $nama, 'pengepul' => $pengepul]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function KirimMengepul(Request $request, $id)
    {
            $idd = $request->session()->get('mas_session');
            $pemesan = Masyarakat::find($idd);
            $mengepul = new Mengepul;
            $mengepul->jenis = $request->jenis;
            $mengepul->berat = $request->berat;
            $mengepul->oleh = $pemesan->namam;
            $mengepul->status = "Belum";
            $mengepul->id_pemesan = $idd;
            $mengepul->id_pengepul = $id;
            $mengepul->save();
            return redirect('/masadmin/table');
    }

    public function mas_dashboard(Request $request)
    {
        $massession = $request->session()->has('mas_session');
        if ($massession)
        {
            $id = $request->session()->get('mas_session');
            $nama = Masyarakat::find($id);
            return view('NiceAdmin/dashboardmas', ['nama' => $nama]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function pesan(Request $request)
    {

        if ($request->session()->has('mas_session'))
        {
            $massession = $request->session()->get('mas_session');
            $nama = Masyarakat::find($massession);
            return view('NiceAdmin/masmenyampah',['nama' => $nama]);
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
