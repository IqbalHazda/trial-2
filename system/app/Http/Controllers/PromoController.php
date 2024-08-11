<?php

namespace App\Http\Controllers;
use App\Models\Promo;

class PromoController extends Controller{

    function index(){
        $data ['list_promo'] = Promo::all();
        return view("promo.index", $data);
    }

        function create(){
        return view("promo.create");
    }

        function store(){
        $promo = new Promo();
        $promo->nama = request('nama');
        $promo->besar_promo = request('besar_promo');
        $promo->durasi_promo = request('durasi_promo');
        $promo->deskripsi = request('deskripsi');
        $promo->save();

        return redirect('admin/promo')->with('success','Data Berhasil Ditambahkan');
    }

        function show(Promo $promo){
        $data['promo'] = $promo;
        return view('promo.show', $data);
    }

    function edit(Promo $promo){
        $data['promo'] = $promo;
        return view('promo.edit', $data); 
    }

    function update(Promo $promo){
       $promo->nama = request('nama');
        $promo->besar_promo = request('besar_promo');
        $promo->durasi_promo = request('durasi_promo');
        $promo->deskripsi = request('deskripsi');
        $promo->save();

        return redirect('admin/promo')->with('success','Data Berhasil Diedit');;
    }

    function destroy(Promo $promo){
        \Log::info('Deleting data with ID: ' . $promo->id);
        $promo->delete();
        return redirect('admin/promo')->with('danger', 'Data Berhasil Dihapus');
    }

}