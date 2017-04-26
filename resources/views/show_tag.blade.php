@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>Kategori: {{ $judulKategori}}</h1>
      <hr>
      <div class="columns">
        <div class="column is-8">
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
        </div>
        <div class="column is-4">

            <!-- Blog Categories Well -->
            <div class="well">
                <h3>Tags</h3>
                <div class="category-list">
                    @foreach($tag_batiks as $tag)
                        <a href="{{ action('PageController@show_tag',$tag->id)}}">{{ $tag->tag_batik }}</a>
                    @endforeach
                </div>
            </div>

            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci
                    accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>
        </div>
      </div>
    </div>
@endsection
