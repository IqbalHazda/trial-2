<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller{

    function index(){
        $data ['list_produk'] = Produk::all();
        return view("produk.index", $data);
    }

    function create(){
        return view("produk.create");
    }

    function store(){
        $produk = new Produk();
        $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('admin/produk')->with('success','Data Berhasil Ditambahkan');
    }

    function show(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.show', $data);
    }

    function edit(Produk $produk){
        $data['produk'] = $produk;
        return view('produk.edit', $data); 
    }
    
    function update(Produk $produk){
       $produk->nama = request('nama');
        $produk->stok = request('stok');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->deskripsi = request('deskripsi');
        $produk->save(); 

        return redirect('admin/produk')->with('success','Data Berhasil Diedit');;
    }

    function destroy(Produk $produk){
        \Log::info('Deleting product with ID: ' . $produk->id);
        $produk->delete();
        return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');
    }

    function filter(){
        $nama = request('nama'); // untuk filter nama
        $stok = explode(",", request('stok'));
        $data ['harga_min'] = $harga_min = request('harga_min');
        $data ['harga_max'] = $harga_max = request('harga_max');
        // $data ['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get(); // untuk filter nama
        // $data ['list_produk'] = Produk::whereIn('stok', $stok)->get(); // untuk filter stok(data spesifik)
        $data ['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get(); // untuk filter harga min/max
        $data['nama'] = $nama; // untuk filter nama
        $data['stok'] = request('stok'); // untuk filter stok
        return view('produk.index', $data);
    }

    
}




// function filter() {
//         $nama = request('nama');
//         $stok = explode(",", request("stok"));
//         $harga_min = request('harga_min');
//         $harga_max = request('harga_max');

//         $query = Produk::query();

//         if (!empty($nama)) {
//             $query->where('nama', 'like', "%$nama%");
//         }

//         if (!empty($stok)) {
//             $query->whereIn('stok', $stok);
//         }

//         if (!empty($harga_min) && !empty($harga_max)) {
//             $query->whereBetween('harga', [$harga_min, $harga_max]);
//         }

//         $data['list_produk'] = $query->get();
//         $data['nama'] = $nama;

//         return view('produk.index', $data);
// }