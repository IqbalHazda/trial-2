@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-dark" type="button" data-toggle="collapse" data-target="#filterCollapse" aria-expanded="false" aria-controls="filterCollapse">
                            Filter
                        </button>
                    </div>
                    <div id="filterCollapse" class="collapse">
                        <div class="card-body">
                            <form action="{{ url('admin/produk/filter') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="nama" class="control-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $nama ?? '') }}">
                                </div>
                                <div class="form-group">
                                    <label for="stok" class="control-label">Stok</label>
                                    <input type="text" class="form-control" id="stok" name="stok" value="{{ old('stok', $stok ?? '') }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="harga_min" class="control-label">Harga Min</label>
                                            <input type="text" class="form-control" id="harga_min" name="harga_min" value="{{ old('harga_min', $harga_min ?? '') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="harga_max" class="control-label">Harga Max</label>
                                            <input type="text" class="form-control" id="harga_max" name="harga_max" value="{{ old('harga_max', $harga_max ?? '') }}">
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Data Produk
                        <a href="{{url('admin/produk/create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach ($list_produk as $produk)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            @include('template.button.info' , ['url' => url('admin/produk', $produk->id)])
                                            @include('template.button.edit' , ['url' => url('admin/produk', $produk->id)])
                                            @include('template.button.delete', ['url' => url('admin/produk', $produk->id)])
                                        </div>
                                    </td>
                                    <td>{{$produk->nama}}</td>
                                    <td>Rp. {{number_format($produk->harga)}}</td>
                                    <td>{{$produk->stok}}</td>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>    
        </div>
    </div>

@endsection