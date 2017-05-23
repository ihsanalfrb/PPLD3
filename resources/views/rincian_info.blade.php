@extends('layouts.app')

@section('content')
    <div class="container">
      <h1>{{ $data->nama_batik }}</h1>
      <hr>

        <div class="columns">
            <div class="column is-8">
                <p><span class="fa fa-clock"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>
                <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $data->gambar_pola_batik }}" alt="">
                <hr>
                <div class="makna-batik">
                    <h3>Deskripsi Batik</h3>
                    <p>{{ $data->makna_batik }}</p>
                </div>
                <br>
                <div class="sejarah-batik">
                    <h3>Sejarah Batik</h3>
                    <p>{{ $data->sejarah_batik }}</p>
                </div>
            </div>
            <div class="column is-4">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h3>Tags</h3>
                    <div class="category-list">
                        @foreach($tag_batiks as $tag)
                            <a href="{{ action('PageController@daftar_batik_tag',$tag->tag_batik)}}">{{ $tag->tag_batik }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection
