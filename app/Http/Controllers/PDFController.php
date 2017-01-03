<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\datatoPDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function readytopdf(Request $req)
    {
      $mengepul = DB::table('Menyampah')
                ->join('Masyarakat','Menyampah.id_mas','=','Masyarakat.id')
                ->join('Jasa','Menyampah.id_jas','=','Jasa.id')
                ->select('Menyampah.*','Masyarakat.namam','Jasa.namaj')
                ->get();
      view()->share('mengepul',$mengepul);
      if ($req->has('download')) {
        $pdf = PDF::loadView('NiceAdmin/pdf')->setPaper('a4','landscape');
        return $pdf->download('NiceAdmin/pdf');
      }
      return view('NiceAdmin/readytopdf');
    }
}
