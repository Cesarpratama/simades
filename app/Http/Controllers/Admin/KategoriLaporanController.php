<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKategoriLaporanRequest;
use App\Http\Requests\UpdateKategoriLaporanRequest;
use App\Models\KategoriLaporan;
use Illuminate\Support\Facades\Redirect;

class KategoriLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kategoris = KategoriLaporan::all();
        return view('admin.kategoriLaporan.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategoriLaporan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriLaporanRequest $request)
    {
        KategoriLaporan::create($request->validated());

        return to_route('kategori-laporan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriLaporan $kategoriLaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriLaporan $kategoriLaporan)
    {
        return view('admin.kategoriLaporan.edit', compact('kategoriLaporan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriLaporanRequest $request, KategoriLaporan $kategoriLaporan)
    {
        $kategoriLaporan->fill($request->validated());

        $kategoriLaporan->save();
        return to_route('kategori-laporan.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriLaporan $kategoriLaporan)
    {


        $kategoriLaporan->delete();
        return back();
    }
}
