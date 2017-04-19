@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$title}}
                    <small>Secondary Text</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        {{$sum}}
        @for($i = 0; $i < ($sum/4); $i++)

        <!-- Projects Row -->
        <div class="row">
            @for($x = 1; $x <= 4; $x++)
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://kawung.mhs.cs.ui.ac.id/~rahadyan.awinda/batik_pictures/{{ $data[(4*$i)+$x]->gambar_pola_batik }}" alt="">
                </a>
                <hr>
                <h3>
                    <a href="#">{{$data[(4*$i)+$x]->nama_batik}}</a>
                </h3>
                <p>
                    <a href="#">{{$data[(4*$i)+$x]->cluster_batik}}</a>
                </p>
                <p>
                    <a href="#">{{$data[(4*$i)+$x]->asal_daerah}}</a>
                </p>
            </div>
            @endfor
        </div>
        <!-- /.row -->

        @endfor
        <hr>
        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
