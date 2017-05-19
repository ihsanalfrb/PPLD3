@extends("layouts.app")

@section("content")
    <section>
        <img src="data:{{$type}};base64,{{$original_image}}">

        @foreach($batiks as $batik)
        	<div class="columns">
              <div class="column is-2">
                <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $batik->gambar_pola_batik }}" alt="">            </div>
              <div class="column is-6">
                <h3><a href="{{ action('PageController@rincian_informasi',$batik->id)}}">{{ $batik->nama_batik }}</a></h3>
                <p>Asal Batik: {{$batik->asal_daerah}}
                <p>Jenis Pola:
                      @if($batik->cluster_batik == null || $batik->cluster_batik == '')
                        <i>pola belum dikenal</i>
                      @endif
                   {{$batik->cluster_batik}} </p>
              </div>

            </div>
        @endforeach
    </section>
@endsection
