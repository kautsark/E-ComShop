<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MerkBarang;

class MerkBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('merkbarang.index');
    }

    public function data()
    {
        $merk_brg = MerkBarang::orderBy('id_merk','asc')->get();

        return DataTables()
            ->of($merk_brg)
            ->addIndexColumn()
            ->addColumn('aksi', function($merk_brg) {
                return '
                 <button onclick="editForm(`'. route('merkbarang.update', $merk_brg->id_merk) .'`)" class = "btn btn-xs btn-info btn-flat"><i class= "fa fa-edit"></i> </button>
                 <button onclick="deleteData(`'. route('merkbarang.destroy', $merk_brg->id_merk) .'`)" class = "btn btn-xs btn-danger btn-flat"><i class= "fa fa-trash"></i> </button>';
            })
            ->rawColumns(['aksi'])
            ->make(true);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mrk_brg = new MerkBarang();
        $mrk_brg->nama_merk_barang = $request->nama_merk_barang;
        $mrk_brg->save();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merk_brg = MerkBarang::find($id);

        return response()->json($merk_brg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        ////
        $mrk_brg = MerkBarang::find($id);
        $mrk_brg->nama_merk_barang = $request->nama_merk_barang;
        $mrk_brg->update();

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merk_brg = MerkBarang::find($id);
        $merk_brg->delete();

        return response(null,204);

        
    }
}
