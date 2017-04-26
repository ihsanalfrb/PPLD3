@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="columns">
            <div class="column is-8">
                <h1 class="page-header">{{$title}}
                    <small> -- {{$header}}</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="columns">
            <div class="column is-8">
                @for($x = 0; $x < 10 and $x < $sum; $x++)
                {{--@foreach($batiks as $batik)--}}
                    <div class="columns">
                        <div class="column is-2">
                            <a href="{{ action('PageController@rincian_informasi',$batiks[$x]->id)}}">
                                <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $batiks[$x]->gambar_pola_batik }}" alt="">
                            </a>
                        </div>
                        <div class="column is-6">
                            <h3><a href="{{ action('PageController@rincian_informasi',$batiks[$x]->id)}}">{{ $batiks[$x]->nama_batik }}</a></h3>
                            <p>Asal Batik: <a href="{{ action('PageController@daftar_batik_daerah',$batiks[$x]->asal_daerah)}}">{{$batiks[$x]->asal_daerah}}</a></p>
                            <p>Jenis Pola:
                                @if(is_null($batiks[$x]->cluster_batik) or $batiks[$x]->cluster_batik == '')
                                    <a href="{{ action('PageController@daftar_batik_cluster',$batiks[$x]->cluster_batik)}}">uncategorized</a>
                                @else
                                    <a href="{{ action('PageController@daftar_batik_cluster',$batiks[$x]->cluster_batik)}}">{{$batiks[$x]->cluster_batik}}</a>
                                @endif </p>
                        </div>
                    </div>
                @endfor

            </div>
        </div>

        <div class="column is-4">

            <!-- Blog Categories Well -->
            <div class="well">
                <h3>Batik Categories</h3>
                <div class="category-list">
                    @foreach($tag_batiks as $tag)
                        <a href="{{ action('PageController@daftar_batik_tag',$tag->tag_batik)}}">{{ $tag->tag_batik }}</a>
                    @endforeach
                </div>
            </div>

            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci
                    accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>
        </div>
        <hr>
        <!-- Pagination -->

        {{ $batiks->render() }}
    </div>
@endsection

@section('content')
    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="columns">
            <div class="column is-8">
                <h1 class="page-header">{{$title}}
                    <small> -- {{$header}}</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        @for($i = 0; $i < ($sum/4); $i++)

        <!-- Projects Row -->
            <div class="columns">
                @for($x = 0; $x < 4 and (4*$i)+$x < $sum; $x++)
                    <div class="column is-1">
                        <a href="#">
                            <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $data[(4*$i)+$x]->gambar_pola_batik }}" alt="">
                        </a>
                    </div>
                    <div class="column is-2">
                        <h3>
                            <a href="{{ action('PageController@rincian_informasi',$data[(4*$i)+$x]->id)}}">{{$data[(4*$i)+$x]->nama_batik}}</a>
                        </h3>
                        <p>
                            @if(is_null($data[(4*$i)+$x]->cluster_batik) or $data[(4*$i)+$x]->cluster_batik == '')
                                <a href="{{ action('PageController@daftar_batik_cluster',$data[(4*$i)+$x]->cluster_batik)}}">uncategorized</a>
                            @else
                                <a href="{{ action('PageController@daftar_batik_cluster',$data[(4*$i)+$x]->cluster_batik)}}">{{$data[(4*$i)+$x]->cluster_batik}}</a>
                            @endif

                        </p>
                        <p style=>
                            <a href="{{ action('PageController@daftar_batik_daerah',$data[(4*$i)+$x]->asal_daerah)}}">{{$data[(4*$i)+$x]->asal_daerah}}</a>
                        </p>
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
@endsection

