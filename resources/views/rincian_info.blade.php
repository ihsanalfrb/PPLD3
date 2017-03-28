@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-8">
                <h1>{{ $data->nama_batik }}</h1>
                <hr>
                <p><span class="fa fa-clock"></span> Posted on August 24, 2013 at 9:00 PM</p>
                <hr>
                <img class="img-responsive" src="{{ $data->gambar_pola_batik }}" alt="">
                <hr>
                <div class="makna-batik">
                    <h3>Makna Batik</h3>
                    <p>{{ $data->makna_batik }}</p>
                </div>
                <br>
                <div class="sejarah-batik">
                    <h3>Sejarah Batik</h3>
                    <p>{{ $data->sejarah_batik }}</p>
                </div>
            </div>
            <div class="column is-4">
                <div class="well">
                    <h3>Batik Search</h3>
                    <div class="field is-grouped">
                        <p class="control is-expanded">
                            <input class="input" type="text" placeholder="Find a batik">
                        </p>
                        <p class="control">
                            <a class="button is-primary">
                                Search
                            </a>
                        </p>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h3>Batik Categories</h3>
                    <div class="category-list">
                        @foreach($tag_batiks as $tag)
                            <a href="#">{{ $tag->tag_batik }}</a>
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
        <hr>
    </div>
@endsection
