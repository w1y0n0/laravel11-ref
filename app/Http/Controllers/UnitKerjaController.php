<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('unit_kerja.index');
    }

    // Method untuk menampilkan data
    public function data()
    {
        $unitKerja = UnitKerja::orderBy('id_unit_kerja', 'DESC')->get();
        // return $unitKerja;
        return datatables()
            ->of($unitKerja)
            ->addIndexColumn()
            ->addColumn('aksi', function($unitKerja){
                return '
                <center>
                <div class="btn-group">
                    <button onclick="editForm(`'. route('unit-kerja.update', $unitKerja->id_unit_kerja) .'`)" class="btn btn-warning btn-sm" title="Edit Data"><i class="fas fa-edit"></i> Edit</button>
                    <button onclick="deleteData(`'. route('unit-kerja.destroy', $unitKerja->id_unit_kerja) .'`)" class="btn btn-danger btn-sm" title="Hapus Data"><i class="fas fa-trash"></i> Hapus</button>
                </div>
                </center>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unitKerja = new UnitKerja();
        $unitKerja->nama_unit_kerja = $request->nama_unit_kerja;
        $unitKerja->lokasi = $request->lokasi;
        $unitKerja->save();

        return response()->json(['message' =>'Data berhasil disimpan.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // if ($id === 'data'){
        //     return $this->data();
        // }

        $unitKerja = UnitKerja::find($id);

        return response()->json($unitKerja);
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
    public function update(Request $request, string $id)
    {
        $unitKerja = UnitKerja::find($id);

        $unitKerja->nama_unit_kerja = $request->nama_unit_kerja;
        $unitKerja->lokasi = $request->lokasi;
        $unitKerja->update();

        return response()->json(['message' => 'Data berhasil diubah.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unitKerja = UnitKerja::find($id);
        $unitKerja->delete();

        return response()->json(['message' => 'Data berhasil dihapus.']);
    }
}
