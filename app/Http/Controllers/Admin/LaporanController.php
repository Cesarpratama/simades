<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLaporanRequest;
use App\Http\Requests\UpdateLaporanRequest;
use App\Models\KategoriLaporan;
use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $user = auth()->user();
        $laporans = Laporan::where('user_id', $user->id)->get();
    
        //jika user adalah admin tampilkan semua data laporan
        if ($user->is_admin == 'superadmin' || $user->is_admin == 'admin')   $laporans = Laporan::ofType(request('q'))->get();

        return view('admin.laporan.index', compact('laporans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $kategori = KategoriLaporan::all();
        return view('admin.laporan.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLaporanRequest $request)
    {

        $data = $request->validated();
        $data['user_id'] = Auth::id();

        if ($request->file('lampiran')) {
            $file = $request->file('lampiran');
            $destinationPath = 'assets/lampiran/';
            $name = Str::upper(Str::random(16)) . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $name);
            $data['lampiran'] = $name;
        }
        Laporan::create($data);

        return to_route('laporan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {


        return view('admin.laporan.show', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLaporanRequest $request, Laporan $laporan)
    {

        $laporan->tanggapan = $request->tanggapan;
        $laporan->status = true;
        $laporan->save();

        return back()->with('status',' tanggapan berhasil di kirim');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return to_route('laporan.index');
    }
}
