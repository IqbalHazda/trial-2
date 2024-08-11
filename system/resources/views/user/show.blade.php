@extends('template.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Detail Data User</h4>
                    </div>
                    <div class="card-body">
                        <hr>
                        <div class="user-details">
                            <p><strong>Nama:</strong> {{$user->nama}}</p>
                            <p><strong>Username:</strong> {{$user->username}}</p>
                            <p><strong>Email:</strong> {{$user->email}}</p>
                            <p><strong>Tempat Tinggal:</strong> {{$user->detail->tempat_tinggal}}</p>
                            <p><strong>No. Handphone:</strong> {{$user->detail->no_handphone}}</p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection
