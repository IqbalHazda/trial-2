@extends('template.base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Promo
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/promo') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama" class="control-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="besar_promo" class="control-label">Besar Promo</label>
                                    <input type="number" name="besar_promo" id="besar_promo" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="durasi_promo" class="control-label">Durasi Promo</label>
                                    <input type="number" name="durasi_promo" id="durasi_promo" class="form-control">
                                </div>
                            </div>

                            <div class="form-grup">
                                <label for = "" class="control-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control"></textarea>
                            </div>

                            <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
