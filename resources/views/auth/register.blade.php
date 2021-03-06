@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <p class="control">
                        <input id="name" type="text"
                               class="input {{ $errors->has('name') ? ' is-danger' : '' }}"
                               name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help is-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <label for="email" class="label">E-Mail Address</label>
                    <p class="control">
                        <input id="email" type="email"
                               class="input {{ $errors->has('email') ? ' is-danger' : '' }}"
                               name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <p class="help is-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control">
                        <input id="password" type="password"
                               class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <p class="help is-danger">
                                <strong>{{ $errors->first('password') }}</strong>
                            </p>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <label for="password-confirm" class="label">Confirm Password</label>
                    <p class="control">
                        <input id="password-confirm"
                               type="password" class="input" name="password_confirmation" required>
                    </p>
                </div>

                <div class="form-group">
                    <button type="submit" class="button is-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
