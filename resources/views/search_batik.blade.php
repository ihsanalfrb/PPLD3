@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="columns">
            <div class="column is-8">
                <p class="title is-1">{{$title}}</p>
                <p class="subtitle is-4">{{$header}}</p>
            </div>
        </div>
        <!-- /.row -->
        <div class="columns">
            <div class="column is-9">
                <!-- Hasil Batik -->
                @if($batiks_sum <> 0)
                    @for($x = 0; $x < ($batiks_sum/3); $x++)
                        {{--@foreach($batiks as $batik)--}}

                        <div class="columns">
                            @for($y = 0; $y < 3 and (3*$x)+$y <$batiks_sum; $y++)
                                <div class="column is-4 box">
                                    <article class="media">
                                        <div class="media-left">
                                            <figure class="image is-96x96">
                                                <a href="{{ action('PageController@rincian_informasi',$batiks[(3*$x)+$y]->id)}}">
                                                    <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $batiks[(3*$x)+$y]->gambar_pola_batik }}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="media-content">
                                            <h3 class="subtitle is-3"><a href="{{ action('PageController@rincian_informasi',$batiks[(3*$x)+$y]->id)}}">{{ $batiks[(3*$x)+$y]->nama_batik }}</a></h3>
                                            <p class="subtitle is-6"> Asal Batik: <a href="{{ action('PageController@daftar_batik_daerah',$batiks[(3*$x)+$y]->asal_daerah)}}">{{$batiks[(3*$x)+$y]->asal_daerah}}</a></p>
                                            <p class="subtitle is-6">Jenis Pola:
                                                @if(is_null($batiks[(3*$x)+$y]->cluster_batik) or $batiks[(3*$x)+$y]->cluster_batik == '')
                                                    <a href="{{ action('PageController@daftar_batik_cluster',$batiks[(3*$x)+$y]->cluster_batik)}}">uncategorized</a>
                                                @else
                                                    <a href="{{ action('PageController@daftar_batik_cluster',$batiks[(3*$x)+$y]->cluster_batik)}}">{{$batiks[(3*$x)+$y]->cluster_batik}}</a>
                                                @endif </p>
                                        </div>
                                    </article>
                                </div>
                            @endfor
                        </div>
                    @endfor
                    @else
                    <div class="has-text-centered">
                        <div class="notification is-warning has-text-centered">
                            <p>Batik yang Anda cari tidak ditemukan silakan coba kata kunci yang lain.</p>
                        </div>
                    </div>
                @endif
                <!-- /.row -->
                <hr>
                <!-- Pagination -->
                @if($batiks_sum <> 0)
                    {{ $batiks->render() }}
                @endif
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

    </div>
    <script>
        $(document).ready(function () {
            $('#search_input').val("{{$keywords}}");
            if($('#search_input').val() !== "")
                $('#search_input').attr("placeholder", "");
            var url = "{{ action('PageController@search_batik', ':keywords')}}"
            $('#search_button').attr("href", url.replace(':keywords', $('#search_input').val()));
        });
    </script>
@endsection
