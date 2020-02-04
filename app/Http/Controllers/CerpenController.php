<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Cerpen;
use App\Penulis;
use File;

class CerpenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cerpen = Cerpen::orderBy('created_at','desc')->get();
        return view('cerpen.index', compact('cerpen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cerpen = Cerpen::all();
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        return view('cerpen.create', compact('kategori','penulis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cerpen = new Cerpen();
        $cerpen->judul = $request->judul;

        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/cerpen';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $cerpen->gambar = $filename;
            $cerpen->konten = $request->konten;
            $cerpen->id_kategori = $request->id_kategori;
            $cerpen->id_penulis = $request->id_penulis;
        }
        $cerpen->save();
        $cerpen->kategori()->attach($request->kategori);
        $cerpen->penulis()->attach($request->penulis);
        return redirect()->route('cerpen.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cerpen = Cerpen::findOrFail($id);
        return view('cerpen.show', compact('cerpen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cerpen = Cerpen::findOrfail($id);
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        return view('cerpen.edit', compact('cerpen','kategori','penulis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cerpen = Cerpen::findOrFail($id);
        $cerpen->judul = $request->judul;

        // foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/cerpen/';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,$filename
            );
            // hapus foto lama jika ada
            if ($cerpen->gambar) {
                $old_foto = $cerpen->gambar;
                $filepath = public_path() .
                    '/assets/img/cer$cerpen/' .
                    $cerpen->gambar;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $cerpen->gambar = $filename;
            $cerpen->konten = $request->konten;
            $cerpen->id_kategori = $request->id_kategori;
            $cerpen->id_penulis = $request->id_penulis;
        }
            $cerpen->save();
            $cerpen->kategori()->sync($request->kategori);
            $cerpen->penulis()->sync($request->penulis);

            return redirect()->route('cerpen.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cerpen = Cerpen::findOrFail($id);
        if ($cerpen->foto) {
            $old_foto = $cerpen->gambar;
            $filepath = public_path()
            . '/assets/img/cerpen/' . $cerpen->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // file sudah dihapus/tidak ada
            }
        }
        $cerpen->kategori()->detach($cerpen->id);
        $cerpen->penulis()->detach($cerpen->id);
        $cerpen->delete();

        return redirect()->route('cerpen.index');
    }
}
