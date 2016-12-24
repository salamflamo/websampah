<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //membuat session
    public function getSession(Request $request)
    {
        if($request->session()->has('session_name'))
        {
            dd($request->session()->get('session_name')) ;
        }
        else
        {
            echo "has no data here";
        }
        
    }

    public function putSession(Request $request)
    {
        $request->session()->put('session_name','njajal.com');
        echo "sudah ditambahkan session name";
    }

    public function forgetSession(Request $request)
    {
        $request->session()->forget('session_name');
        echo "data session sudah dihapus";
    }
}
