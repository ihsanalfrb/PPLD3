@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-4 is-offset-4">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label is-large">Name</label>
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
                    <label for="email" class="label is-large">E-Mail Address</label>
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
                    <label for="birthday" class="label is-large">Date of Birth</label>
                    <p class="control">
                        <input id="birthday" class="input {{ $errors->has('email') ? ' is-danger' : '' }}"
                            value="{{ old('birthday') }}" type="date" class="input" name="birthday" required>
                        @if ($errors->has('birthday'))
                            <p class="help is-danger">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </p>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <label for="gender" class="label is-large">Gender</label>
                    <div class="control">

                        <label for="gender_male" class="radio"><input id="gender_male" type="radio" name="gender" {{ old('gender') == 'male' ? 'checked' : ''}} value="male" required>Male</label>
                    </div>
                    <div class="control">

                        <label for="gender_female" class="radio"><input id="gender_female" type="radio" name="gender" {{ old('gender') == 'female' ? 'checked' : ''}} value="female" required>Female</label>
                    </div>
                    <div class="control">

                        <label for="gender_other" class="radio"><input id="gender_other" type="radio" name="gender"{{ old('gender') == 'other' ? 'checked' : ''}} value="other" required>Other</label>
                    </div>
                </div>
                <div class="field">
                    <label for="password" class="label is-large">Password</label>
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
                    <label for="password-confirm" class="label is-large">Confirm Password</label>
                    <p class="control">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                    </p>
                </div>
                <div class="form-group has-text-centered">
                    <button type="submit" class="button is-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
