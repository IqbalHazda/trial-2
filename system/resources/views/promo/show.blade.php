@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail Data Promo
                    </div>
                    <div class="card-body">
                        <h3>{{$promo->nama}}</h3>
                        <hr>
                        <p>
                            Besar Promo : {{number_format($promo->besar_promo)}}% |
                            Durasi : {{$promo->durasi_promo}} hari. |
                        </p>
                        <p>
                            {!! nl2br($promo->deskripsi) !!}
                        </p>
                    </div>
                </div>
            </div>    
        </div>
    </div>

@endsection