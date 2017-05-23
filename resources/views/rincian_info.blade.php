@extends('layouts.app')

@section('content')
    <div class="container">
      <h2 class="title is-2">{{ $data->nama_batik }}</h2>
      <hr>
        <div class="columns">
            <div class="column is-9">
                <div class="columns">
                    <div class="column is-4 is-grouped-right">
                        <figure class="image is-grouped-right">
                            <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $data->gambar_pola_batik }}" alt="">
                        </figure>
                    </div>
                    <div class="column is-8">
                        <div class="column">
                            <h3 class="subtitle is-3">Deskripsi Batik</h3>
                            <p>{{ $data->makna_batik }}</p>
                            <br>
                            <h3 class="subtitle is-3">Sejarah Batik</h3>
                            <p>{{ $data->sejarah_batik }}</p>
                            <hr>
                            <p><i class="fa fa-clock"></i>Posted on August 24, 2013 at 9:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-3">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h3 class="subtitle is-3">Tags</h3>
                    <div class="category-list">
                        @foreach($tag_batiks as $tag)
                            <a class="tag is-dark is-small" href="{{ action('PageController@daftar_batik_tag',$tag->tag_batik)}}">{{ $tag->tag_batik }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection
