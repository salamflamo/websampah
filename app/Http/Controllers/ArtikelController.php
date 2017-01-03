<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;
class ArtikelController extends Controller
{
    public function berita()
    {
        $posting = DB::table('Artikel')->orderBy('updated_at')->paginate(4);
        return view('berita', ['posting' => $posting]);
    }
}
