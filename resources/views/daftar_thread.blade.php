@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$title}}
                    <small>Semua Thread</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            @foreach($threads as $thread)
                {{--<div class="col-md-4 portfolio-item">--}}
                    {{--<a href="#">--}}
                        {{--<img class="img-responsive" src="http://placehold.it/700x400" alt="">--}}
                    {{--</a>--}}
                    {{--<h3>--}}
                        {{--<a href="#">{{$thread->nama_thread}}</a>--}}
                    {{--</h3>--}}
                    {{--<p></p>--}}
                {{--</div>--}}
                <div>
                    <div onclick="" class="cp">
                        <div class="replies">
                            <div class="mini-counts"><span title="0 votes">{{$thread->replies}}</span></div>
                            <div>replies</div>
                        </div>
                        <div class="views">
                            <div class="mini-counts"><span title="1 view">{{$thread->views}}</span></div>
                            <div>view</div>
                        </div>
                    </div>
                    <div class="summary">

                        <h3><a href="#" class="question-hyperlink">{{$thread->nama_thread}}</a></h3>

                        <div class="started">
                            <a href="#" class="started-link">posted <span title="2017-04-13 13:39:37Z" class="relativetime">{{$thread->created_at}}</span></a>
                            <a href="#">{{\App\UserAccount::where('id','=',$thread->created_by)->pluck('username')}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
                {{--<div>--}}
                    {{--<div onclick="" class="cp">--}}
                        {{--<div class="replies">--}}
                            {{--<div class="mini-counts"><span title="0 votes">0</span></div>--}}
                            {{--<div>replies</div>--}}
                        {{--</div>--}}
                        {{--<div class="views">--}}
                            {{--<div class="mini-counts"><span title="1 view">1</span></div>--}}
                            {{--<div>view</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="summary">--}}

                        {{--<h3><a href="#" class="question-hyperlink">aaaa</a></h3>--}}
                        {{--<div class="started">--}}
                            {{--<a href="#" class="started-link">posted <span title="2017-04-13 13:39:37Z" class="relativetime">xx</span></a>--}}
                            {{--<a href="#">Nigel Ng</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
        </div>
        <!-- /.row -->


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
