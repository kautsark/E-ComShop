<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\MerkBarang;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use PDF;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $merk_barang = MerkBarang::all()->pluck('nama_merk_barang','id_merk');
        return view('barang.index',compact('merk_barang'));
    }

    public function data()
    {
        $barang = Barang::leftJoin('table_merk_barang','table_merk_barang.id_merk','table_barang.id_merk_barang')
                  ->select('table_barang.*','nama_merk_barang')
                  ->orderBy('id_barang','asc')->get();

        return DataTables()
            ->of($barang)
            ->addIndexColumn()
            ->addColumn('checkAll', function($barang) {
                return '<input type="checkbox" name="id_barang[]" id="checkAll" value= "'.$barang->id_barang.'">';
            })
            ->addColumn('harga_modal', function($barang) {
                return format_uang($barang->harga_modal);
            })
            ->addColumn('harga_bengkel', function($barang) {
                return format_uang($barang->harga_bengkel);
            })
            ->addColumn('harga_eceran', function($barang) {
                return format_uang($barang->harga_eceran);
            })
            ->addColumn('harga_grosir', function($barang) {
                return format_uang($barang->harga_grosir);
            })
            ->addColumn('Merk Barang', function($barang) {
                return $barang->nama_merk_barang;
            })
            ->addColumn('kode_barang', function($barang){
                return '<span class="badge badge-success">'. $barang->kode_barang .'</span>';
            })

            ->addColumn('aksi', function($barang) {
                return '
                 <button onclick="editForm(`'. route('barang.update', $barang->id_barang) .'`)" class = "btn btn-xs btn-info btn-flat"><i class= "fa fa-edit"></i> </button>
                 <button onclick="deleteData(`'. route('barang.destroy', $barang->id_barang) .'`)" class = "btn btn-xs btn-danger btn-flat"><i class= "fa fa-trash"></i> </button>';
            })
            ->rawColumns(['aksi','kode_barang','checkAll'])
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
        $barang = Barang::latest()->first();
        $request['kode_barang'] = 'B'. tambahKodeBarang($barang->id_barang+1 ,6);
        $barang = Barang::create($request->all());

        return response()->json('Data Berhasil Disimpan',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        return response()->json($barang);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $barang = Barang::find($id);
        $barang->update($request->all());
        
        return response()->json('Data telah berhasil di rubah',200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return response(null,204);
    }

    public function cetakBarcode(Request $request){
        // return $request;
        $dataBarang = array();
        foreach ($request->id_barang as $id) {
            $barangDta = Barang::find($id);
            $dataBarang[]=$barangDta;
        }
        $no = 1;
        $pdf = FacadePdf::loadView('barang.barcode',compact('dataBarang','no'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream('barang.pdf');
    }

    public function deleteSelected(Request $request) {

        foreach($request->id_barang as $id) {
            $barang = Barang::find($id);
            $barang->delete();
        }
        response()->alert('Data berhasil dihapus',204);
    }
}
