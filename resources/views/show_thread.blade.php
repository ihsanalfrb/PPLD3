@extends('layouts.app')

@section('content')
    <div class="columns">
        @if(\Illuminate\Support\Facades\Session::has('comment_success'))
            <div class="notification is-primary">
                {{ \Illuminate\Support\Facades\Session::get('comment_success') }}
            </div>
        @endif
    </div>

    <div class="thread-comments">

        <div class="columns">
            <div class="column is-1">

            </div>
            <div class="column is-6">
                <div class="hero">

                    <p class="title is-2">{{ $thread->nama_thread }}</p>
                    <p class="subtitle is-4">Author {{ $thread->creator->name }} &nbsp; | &nbsp; created at: {{ \Carbon\Carbon::parse($thread->created_at)->diffForHumans() }} &nbsp;|&nbsp; {{ $thread->views }} views</p>

                    <div class="thread-content has-text-centered" style="padding: 2em 0;">
                        <h4 class="title is-4">{{ $thread->content }}</h4>

                    </div>

                </div>
                <h4>Comments({{ $thread->comments()->count() }}):</h4>
                @foreach($thread->comments as $comment)
                    <div class="hero is-light" style="padding: 1em; border: 1px solid black; margin: 1em 0;">
                        <h4>{{ $comment->judul_komentar }}</h4>
                        <p>Comment by: {{ $comment->comment_author->name }} &nbsp; | &nbsp; created at : {{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</p>
                        <hr>
                        <p class="comment-content">{{ $comment->isi_komentar }}</p>

                        @if(!is_null($user) and $comment->comment_author->id == $user->id)
                            <form action="{{ action('CommentController@destroy', $comment->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="button" class="button is-danger modal-button" data-target="#modal{{ $comment->id  }}">Delete</button>
                                <div class="modal" id="modal{{ $comment->id }}">
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
                <hr>
                <div class="columns">
                    @if(!is_null($user))
                        <div class="form-create-comment column is-6">
                            <form action="{{ action('CommentController@store') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $thread->id }}" name="thread_id">
                                <div class="field">
                                    <p class="control">
                                        <label for="judul_komentar">Judul Komentar</label>
                                        <input value="{{ old('judul_komentar') }}" type="text" class="input {{ $errors->has('judul_komentar') ? 'has-error' : '' }}" name="judul_komentar" id="judul_komentar">
                                    @if($errors->has('judul_komentar'))
                                        <p class="help is-danger">
                                            {{ $errors->first('judul_komentar') }}
                                        </p>
                                        @endif
                                        </p>
                                </div>
                                <div class="field">
                                    <p class="control">
                                        <label for="isi_komentar">Isi Komentar</label>
                                        <textarea style="height: 200px;" type="text" class="input {{ $errors->has('isi_komentar') ? 'has-error' : ''}}"
                                                  name="isi_komentar" id="isi_komentar" rows="5" cols="5">{{ old('isi_komentar') }}</textarea>
                                    @if($errors->has('isi_komentar'))
                                        <p class="help is-danger">{{ $errors->first('isi_komentar') }}</p>
                                        @endif
                                        </p>
                                </div>
                                <div class="field">
                                    <input type="submit" value="Post Komentar" class="button is-primary">
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
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
@endsection
