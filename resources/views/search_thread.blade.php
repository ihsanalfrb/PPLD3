@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Header -->
        <div class="columns">
            <div class="column is-8">
                <p class="title is-1">{{$title}}</p>
                <p class="subtitle is-4">{{$header}}</p>
            </div>
        </div>
        <!-- /.row -->
        <div class="thread-comments">
            <div class="columns">
                <div class="column is-3">
                      <div class="field is-grouped">
                        <p class="control is-expanded">
                          <input id="search_thread_input" class="input" type="text" placeholder="Find a thread" name="keywords">
                        </p>
                        <p class="control">
                          <a id="search_thread_button" href="{{ action('PageController@search_thread', '')}}"><input class="button is-primary" type="submit" value="Search Thread"></a>
                        </p>
                      </div>
                </div>
                <script>
                    $('#search_thread_input').on('input',function(e){
                        var url = "{{ action('PageController@search_thread', ':keywords')}}"
                        $('#search_thread_button').attr("href", url.replace(':keywords', $('#search_thread_input').val()));
                    });
                </script>
            </div>
            <div class="columns">
                <div class="column is-1"></div>
                <div class="column is-6">
                    @if(!is_null($threads))
                    @foreach($threads as $thread)
                        <div class="hero is-light" style="padding: 1em; border: 1px solid black; margin: 1em 0;">
                            <p class="title is-4"><a class="subtitle is-4" href="{{action('ThreadController@show',$thread->id)}}">{{ $thread->nama_thread}}</a></p>
                            <p>Created by: {{ $thread->creator->name }} &nbsp; | &nbsp; created at : {{ \Carbon\Carbon::parse($thread->created_at)->diffForHumans() }}</p>
                            <hr>
                            <p>Views : {{$thread->views}}  </p>

                            @if(!is_null($user) and $user['is_admin'])
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
                <div class="column is-3">
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
