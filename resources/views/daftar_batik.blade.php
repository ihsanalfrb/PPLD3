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

        @for($i = 0; $i < ($sum/4); $i++)

        <!-- Projects Row -->
        <div class="columns">
            @for($x = 0; $x < 4 and (4*$i)+$x < $sum; $x++)
                <div class="column is-3 box hero is-light">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                                <a href="{{ action('PageController@rincian_informasi',$data[(4*$i)+$x]->id)}}">
                                    <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $data[(4*$i)+$x]->gambar_pola_batik }}" alt="">
                                </a>
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="subtitle is-4"> <a class="subtitle is-4" href="{{ action('PageController@rincian_informasi',$data[(4*$i)+$x]->id)}}">{{$data[(4*$i)+$x]->nama_batik}}</a></p>
                            @if(is_null($data[(4*$i)+$x]->cluster_batik) or $data[(4*$i)+$x]->cluster_batik == '')
                                <p class="subtitle is-6"><a class="subtitle is-6" href="{{ action('PageController@daftar_batik_cluster',$data[(4*$i)+$x]->cluster_batik)}}">uncategorized</a></p>
                            @else
                                <p class="subtitle is-6"><a class="subtitle is-6" href="{{ action('PageController@daftar_batik_cluster',$data[(4*$i)+$x]->cluster_batik)}}">{{$data[(4*$i)+$x]->cluster_batik}}</a></p>
                            @endif
                            <p class="subtitle is-6"> <a class="subtitle is-6" href="{{ action('PageController@daftar_batik_daerah',$data[(4*$i)+$x]->asal_daerah)}}">{{$data[(4*$i)+$x]->asal_daerah}}</a></p>
                        </div>
                    </article>
                </div>
            <hr>
            @endfor
        </div>
        <!-- /.row -->

        @endfor
        <hr>
        <!-- Pagination -->
            {{ $data->render() }}

        <!-- /.row -->
    </div>
    <script>
    </script>
@endsection
