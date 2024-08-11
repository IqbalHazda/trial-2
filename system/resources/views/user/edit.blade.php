@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Edit Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/user', $user->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-grup">
                                <label for = "" class="control-label">Nama</label>
                                <input type="text" name="nama" value="{{$user->nama}}" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-grup">
                                        <label for = "" class="control-label">Username</label>
                                        <input type="text" name="username" value="{{$user->username}}" class="form-control">
                                    </div>
                                </div>
                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for = "" class="control-label">Email</label>
                                    <input type="email" name="email" value="{{$user->email}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for = "" class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for = "" class="control-label">Tempat Tinggal</label>
                                    <input type="text" name="tempat_tinggal" value="{{$user->detail->tempat_tinggal}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-grup">
                                    <label for = "" class="control-label">No. Handphone</label>
                                    <input type="number" name="no_handhpone" value="{{$user->detail->no_handphone}}" class="form-control">
                                </div>
                            </div>
                            </div>

                            <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>

@endsection