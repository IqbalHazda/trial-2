@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Edit Data Promo
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/promo', $promo->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-grup">
                                <label for = "" class="control-label">Nama</label>
                                <input type="text" name="nama" value="{{$promo->nama}}" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for = "" class="control-label">Besar Promo</label>
                                        <input type="number" name="besar_promo" value="{{$promo->besar_promo}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-grup">
                                    <label for = "" class="control-label">Durasi Promo</label>
                                    <input type="number" name="durasi_promo" value="{{$promo->durasi_promo}}" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-grup">
                                <label for = "" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control">{{$promo->deskripsi}}</textarea>
                            </div>

                            <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>

@endsection