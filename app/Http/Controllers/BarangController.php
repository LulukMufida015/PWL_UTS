<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //fungsi eloquent menampilkan data menggunakan pagination
         $barang = Barang::paginate(5); // Mengambil semua isi tabel
         $posts = Barang::orderBy('id_barang', 'desc')->paginate(6);
         return view('barang.index', compact('barang'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'Kode_Barang' => 'required',
            'Nama_Barang' => 'required',
            'Kategori_Barang' => 'required',
            'Harga' => 'required',
            'QTY' => 'required',
            ]);
            //fungsi eloquent untuk menambah data
            Barang::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
            return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_barang)
    {
         //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
         $barang = Barang::find($id_barang);
         return view('barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_barang)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $barang = Barang::find($id_barang);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_barang)
    {
        //melakukan validasi data
        $request->validate([
            'Kode_Barang'  => 'required',
            'Nama_Barang' => 'required',
            'Kategori_Barang' => 'required',
            'Harga' => 'required',
            'QTY' => 'required',
            ]);
             //fungsi eloquent untuk mengupdate data inputan kita
            Barang::find($id_barang)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_barang)
    {
        //fungsi eloquent untuk menghapus data
        Barang::find($id_barang)->delete();
        return redirect()->route('barang.index')
        -> with('success', 'Barang Berhasil Dihapus');
    }
    public function search(Request $request){
        $keyword = $request->keyword;
        $barang = Barang::where('Kode_Barang', 'like', '%' .$keyword. '%')
        ->orWhere('Nama_Barang', 'like', '%' .$keyword. '%')
        ->orWhere('Kategori_Barang', 'like', '%' .$keyword. '%')
        ->paginate(5);
        $barang->appends(['keyword' => $keyword]);
        return view('barang.index', compact('barang'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

