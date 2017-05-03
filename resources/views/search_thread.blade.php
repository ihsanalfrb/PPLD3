@extends('layouts.app')

@section('content')
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
        <div class="thread-comments">
            <div class="columns">
                <div id="nav-menu" class="nav-left nav-menu" style="">
                    <span class="nav-item">
                      <div class="field is-grouped">
                        <p class="control is-expanded">
                          <input id="search_thread_input" class="input" type="text" placeholder="Find a thread" name="keywords">
                        </p>
                        <p class="control">
                          <a id="search_thread_button" href="{{ action('PageController@search_thread', '')}}"><input class="button is-primary" type="submit" value="Search"></a>
                        </p>

                      </div>
                    </span>
                </div>
                <script>
                    $('#search_thread_input').on('input',function(e){
                        var url = "{{ action('PageController@search_thread', ':keywords')}}"
                        $('#search_thread_button').attr("href", url.replace(':keywords', $('#search_thread_input').val()));
                    });
                </script>
            </div>
            <div class="columns">
                <div class="column is-6">
                    @if(!is_null($threads))
                    @foreach($threads as $thread)
                        <div style="padding: 1em; border: 1px solid black; margin: 1em 0;">
                            <a href="{{action('ThreadController@show',$thread->id)}}"><h4>{{ $thread->nama_thread}}</h4></a>
                            <p>Created by: {{ $thread->creator->name }} &nbsp; | &nbsp; created at : {{ \Carbon\Carbon::parse($thread->created_at)->diffForHumans() }}</p>
                            <hr>
                            <p>Views : {{$thread->views}}  </p>

                            @if(!is_null($current_user) and $current_user->is_admin)
                                <form action="{{ action('ThreadController@destroy', $thread->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="button" class="button is-danger modal-button" data-target="#modal{{ $thread->id  }}">Delete</button>
                                    <div class="modal" id="modal{{ $thread->id }}">
                                        <div class="modal-background"></div>
                                        <div class="modal-card">
                                            <header class="modal-card-head">
                                                <p class="modal-card-title">Are you sure to delete?</p>
                                            </header>
                                            <footer class="modal-card-foot">
                                                <button class="button is-danger" type="submit">Delete</button>
                                            </footer>
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    @endforeach
                    @endif
                </div>
                <div class="column is-6">
                    @if(!is_null($current_user) and $current_user->is_admin)
                        <button id="tambah_thread" class="button is-primary">Tambah Thread</button>
                        <div class="form-create-comment" hidden>
                            <form action="{{ action('ThreadController@store') }}" method="post">
                                {{ csrf_field() }}
                                <div class="field">
                                    <p class="control">
                                        <label for="nama_thread">Judul Thread</label>
                                        <input value="{{ old('nama_thread') }}" type="text" class="input {{ $errors->has('nama_thread') ? 'has-error' : '' }}" name="nama_thread" id="nama_thread">
                                    @if($errors->has('nama_thread'))
                                        <p class="help is-danger">{{ $errors->first('nama_thread') }}</p>
                                    @endif
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label for="content">Konten Thread</label>
                                        <textarea style="height: 200px;" type="text" class="input {{ $errors->has('content') ? 'has-error' : ''}}"
                                                  name="content" id="content" rows="5" cols="5">{{ old('content') }}</textarea>
                                    @if($errors->has('content'))
                                        <p class="help is-danger">{{ $errors->first('content') }}</p>
                                    @endif
                                    </p>
                                </div>
                                <div class="field">
                                    <input type="submit" value="Tambah Thread" class="button is-primary">
                                    <input type="button" id="batal_tambah" value="Batal Tambah" class="button is-danger">
                                </div>
                            </form>
                        </div>
                    @endif
                </div>

            </div>
            @if(!is_null($threads))
            {{$threads->render()}}
            @endif
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#nav_forums').addClass("is-active");
        });

        $('#tambah_thread').click(function(){
            $('#tambah_thread').hide(500);
            $('.form-create-comment').show(500);
        });

        $('#batal_tambah').click(function(){
            $('.form-create-comment').hide(500);
            $('#tambah_thread').show(500);
        });
    </script>
@endsection
