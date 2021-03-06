@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-4 is-offset-4">
            @if (session('status'))
                <div class="notification is-danger">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label for="email" class="label">E-Mail Address</label>
                    <p class="control">
                        <input id="email" type="email"
                               class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help is-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </p>
                </div>

                <div class="field">
                    <button type="submit" class="button is-primary">
                        Send Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
