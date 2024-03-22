<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
 
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $beritas = Berita::all();


        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $data = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
            'link' => ['required'],
        ], [
            'required' => ':attribute Wajib di isi.',

        ]);


        if ($request->file('lampiran')) {
            $file = $request->file('lampiran');
            $destinationPath = 'assets/berita/';
            $name = Str::upper(Str::random(16)) . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $name);
            $data['foto'] = $name;
        }
        Berita::create($data);

        return to_route('berita.index');


        // dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $beritum)
    
    {

        $berita= $beritum;
        
        return view('admin.berita.show', compact('berita'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $beritum)
    {

        $berita = $beritum;
        $data = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
            'link' => ['required'],
        ], [
            'required' => ':attribute Wajib di isi.',

        ]);


      

        // path to my image file


      


        if ($request->file('lampiran')) {

           
        $path = $berita->foto;


        if (!File::exists($path)) 
        {
          File::delete($berita->foto);
        } 
            $file = $request->file('lampiran');
            $destinationPath = 'assets/berita/';
            $name = Str::upper(Str::random(16)) . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $name);
            $data['foto'] = $name;
        }
        $berita->update($data);

        return to_route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $beritum)
    {


$beritum->delete();

return to_route('berita.index');}
}
