@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="email"
                               class="label is-large">E-Mail Address</label>
                        <p class="control">
                            <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}"
                                   name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <p class="help is-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </p>
                            @endif
                        </p>
                    </div>

                    <div class="field ">
                        <label for="password" class="label is-large">Password</label>
                        <p class="control">
                            <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }}"
                                   name="password" required>
                            @if ($errors->has('password'))
                                <p class="help is-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                </p>
                            @endif
                        </p>
                    </div>

                    <div class="field">
                        <p class="control">
                            <div class="checkbox">
                                <label class="label is-small">
                                    <input type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </p>
                    </div>

                    <div class="form-group has-text-right">
                        <div class="col-md-8 col-md-offset-4 has-text-centered">
                            <button type="submit" class="button is-primary">
                                Login
                            </button>
                        </div>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                    <div class="col-md-8 col-md-offset-4 has-text-centered">
                      <br/>
                      <p>Don't have an account?
                      <a class="btn btn-link" href="{{ route('register') }}">
                          Register
                      </a>
                      </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <script>
    $(document).ready(function(){
        $('#nav_login').addClass("is-active");
    });

    </script>
@endsection
