@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <br/>
        <div class="columns">
            <div class="column is-8">
                <h1 class="title is-2">Hasil Identifikasi Batik
                    <small> -- Pola Batik : {{$cluster}}</small>
                </h1>
            </div>
        </div>
        <hr/>
        <div class="columns">
            <div class="column is-8">
                <h4 class="title is-4">Batik yang ingin diidentifikasi</h4>

                <img src="data:{{$type}};base64,{{$original_image}}">
            </div>
        </div>

        <hr/>
        <h4 class="title is-4">Batik - batik dengan pola sejenis:</h4>
            <!-- Projects Row -->
        <div class="columns">

            @foreach($batiks as $batik)
            <div class="column is-1">
                <a href="#">
                    <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $batik->gambar_pola_batik }}" alt="">
                </a>
            </div>
            <div class="column is-2">
                <h3>
                    <a href="{{ action('PageController@rincian_informasi',$batik->id)}}">{{$batik->nama_batik}}</a>
                </h3>
                <p>
                  Asal Daerah:    {{$batik->asal_daerah}}</a>
                </p>
            </div>
            <hr>
            @endforeach
        </div>
        <!-- /.row -->
        <hr>
        <!-- /.row -->
    </div>
    <script>
      $(document).ready(function() {
        $('#nav_knowledge').addClass("is-active");
      });
    </script>
@endsection
