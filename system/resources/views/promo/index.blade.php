@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Promo
                        <a href="{{url('admin/promo/create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Besar Promo</th>
                                <th>Durasi Promo</th>
                            </thead>
                            <tbody>
                                @foreach ($list_promo as $promo)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            @include('template.button.info' , ['url' => url('admin/promo', $promo->id)])
                                            @include('template.button.edit' , ['url' => url('admin/promo', $promo->id)])
                                            @include('template.button.delete', ['url' => url('admin/promo', $promo->id)])
                                        </div>
                                    </td>
                                    <td>{{$promo->nama}}</td>
                                    <td>{{number_format($promo->besar_promo)}}%</td>
                                    <td>{{$promo->durasi_promo}} hari</td>
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