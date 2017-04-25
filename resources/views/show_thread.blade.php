@extends('layouts.app')

@section('content')
    <h1>{{ $thread->nama_thread }}</h1>
    <div class="thread-content">
        {{ $thread->content }}
    </div>
    <div class="thread-comments">
        @foreach($thread->comments as $comment)
            <div style="padding: 1em; border: 1px solid black; margin: 1em 0;">
                <h4>{{ $comment->judul_komentar }}</h4>
                <p>Comment by: {{ $comment->comment_author->name }}</p>
                <p>{{ $comment->isi_komentar }}</p>
                
                @if($comment->comment_author->id == $current_user->id)
                    <form action="{{ action('CommentController@destroy', $comment->id) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Delete</button>
                    </form>
                @endif
            
            </div>
        @endforeach
    </div>
    <div class="colums">
        <div class="column is-4">
            <div class="form-create-comment">
                <form action="{{ action('CommentController@store') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ $thread->id }}" name="thread_id">
                    <div class="field">
                        <p class="control">
                            <label for="judul_komentar">Judul Komentar</label>
                            <input type="text" class="input" name="judul_komentar" id="judul_komentar">
                        </p>
                    </div>
                    <div class="field">
                        <p class="control">
                            <label for="isi_komentar">Judul Komentar</label>
                            <textarea style="height: 200px;" type="text" class="input"
                                      name="isi_komentar" id="isi_komentar" rows="5" cols="5"></textarea>
                        </p>
                    </div>
                    <div class="field">
                        <input type="submit" value="Post Komentar" class="button is-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection