<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateThreadController extends Controller
{
    public function input()
    {
        return view('createthread');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'Judul' => 'required|min:5|max:20',
           'Kategori' => 'required',
           'Deskripsi' => 'required',
           'FotoPendukung' => 'required'   
        ]);

        return view('proses',['data' => $request]);
    }
}