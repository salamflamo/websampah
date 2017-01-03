<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\datatoPDF;

class PDFController extends Controller
{
    public function readytopdf(Request $req)
    {
      $mengepul = datatoPDF::all();
      view()->share('mengepul',$mengepul);
      if ($req->has('download')) {
        $pdf = PDF::loadView('NiceAdmin/pdf')->setPaper('a4','landscape');
        return $pdf->download('NiceAdmin/pdf');
      }
      return view('NiceAdmin/readytopdf');
    }
}
