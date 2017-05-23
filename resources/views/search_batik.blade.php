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
                <!-- Hasil Batik -->
                @if($batiks_sum <> 0)
                    @for($x = 0; $x < ($batiks_sum/2); $x++)
                        {{--@foreach($batiks as $batik)--}}

                        <div class="columns">
                            @for($y = 0; $y < 2 and (2*$x)+$y <$batiks_sum; $y++)
                            <div class="column is-2">
                                <a href="{{ action('PageController@rincian_informasi',$batiks[(2*$x)+$y]->id)}}">
                                    <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $batiks[(2*$x)+$y]->gambar_pola_batik }}" alt="">
                                </a>
                            </div>
                            <div class="column is-4">
                                <h3><a href="{{ action('PageController@rincian_informasi',$batiks[(2*$x)+$y]->id)}}">{{ $batiks[(2*$x)+$y]->nama_batik }}</a></h3>
                                <p>Asal Batik: <a href="{{ action('PageController@daftar_batik_daerah',$batiks[(2*$x)+$y]->asal_daerah)}}">{{$batiks[(2*$x)+$y]->asal_daerah}}</a></p>
                                <p>Jenis Pola:
                                    @if(is_null($batiks[(2*$x)+$y]->cluster_batik) or $batiks[(2*$x)+$y]->cluster_batik == '')
                                        <a href="{{ action('PageController@daftar_batik_cluster',$batiks[(2*$x)+$y]->cluster_batik)}}">uncategorized</a>
                                    @else
                                        <a href="{{ action('PageController@daftar_batik_cluster',$batiks[(2*$x)+$y]->cluster_batik)}}">{{$batiks[(2*$x)+$y]->cluster_batik}}</a>
                                    @endif </p>
                            </div>
                            @endfor
                        </div>
                    @endfor
                    @else
                    <div class="columns">
                    </div>
                @endif
                <!-- /.row -->

                <!-- Hasil Cluster -->
                {{--@if($categories_sum <> 0)--}}
                    {{--@for($x = 0; $x < ($categories_sum/3); $x++)--}}
                        {{--<div class="columns">--}}
                            {{--@for($y = 0; $y < 3 and (3*$x)+$y <$categories_sum; $y++)--}}
                                {{--<div class="column is-4">--}}
                                    {{--<a href="{{ action('PageController@daftar_batik_cluster', $categories[(3*$x)+$y]->cluster_batik)}}">--}}
                                        {{--<h3>{{$categories[(3*$x)+$y]->cluster_batik}}</h3>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--@endfor--}}
                        {{--</div>--}}
                    {{--@endfor--}}
                {{--@endif--}}
                <!-- /.row -->

                <!-- Hasil Daerah -->
                {{--@if($categories_sum <> 0)--}}
                    {{--@for($x = 0; $x < ($categories_sum/3); $x++)--}}
                        {{--<div class="columns">--}}
                            {{--@for($y = 0; $y < 3 and (3*$x)+$y <$categories_sum; $y++)--}}
                                {{--<div class="column is-4">--}}
                                    {{--<a href="{{ action('PageController@daftar_batik_cluster', $categories[(3*$x)+$y])}}">--}}
                                        {{--<h3>{{$categories[(3*$x)+$y]}}</h3>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--@endfor--}}
                        {{--</div>--}}
                    {{--@endfor--}}
                {{--@endif--}}
                <!-- /.row -->

                <!-- Hasil Tag -->
                <!-- /.row -->
                <hr>
                <!-- Pagination -->
                @if($batiks_sum <> 0)
                    {{ $batiks->render() }}
                @endif
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
