@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Header -->
        <div class="columns">
            <div class="column is-8">
                <h1 class="page-header">{{$title}}</h1>
            </div>
        </div>

        <div class="columns">
            <!-- left column -->
            <div class="column is-3">
                <div class="is-centered">
                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
                    <h6>Change Profile Picture</h6>

                    <input type="file" class="input">
                </div>
            </div>

            <!-- edit form column -->
            <div class="column is-9">
                {{--<div class="alert alert-info alert-dismissable">--}}
                    {{--<a class="panel-close close" data-dismiss="alert">×</a>--}}
                    {{--<i class="fa fa-coffee"></i>--}}
                    {{--This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
                {{--</div>--}}
                <h3>Edit information</h3>
                <div class="field">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <form class="form-horizontal" role="form" method="POST" action="{{action('UserController@update', $user->id)}}">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <input type="hidden" name="_method" value="PUT">
                        <p class="control">
                            <input id="name" type="text"
                                   class="input {{ $errors->has('name') ? ' is-danger' : '' }}"
                                   name="name" value="{{$user->name}}" required autofocus>
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
                                   name="email" value="{{$user->email}}" required>
                        @if ($errors->has('email'))
                            <p class="help is-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                            @endif
                            </p>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <button class="button is-primary" id="button_change_password" type="button">
                            Change Password
                        </button>
                    </div>

                    <div class="form-group" id="change_password">
                        <div class="field">
                            <label for="old_password" class="label">Old Password</label>
                            <p class="control">
                                <input id="old_password" type="password" class="input" name="old_password" disabled>
                            </p>
                        </div>
                        <div class="field">
                            <label for="new_password" class="label">New Password</label>
                            <p class="control">
                                <input id="new_password" type="password"
                                       class="input {{ $errors->has('password') ? 'is-danger' : '' }}" name="new_password" disabled>
                            @if ($errors->has('password'))
                                <p class="help is-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </p>
                                @endif
                                </p>
                        </div>
                        <div class="field">
                            <label for="confirm_password" class="label">Confirm Password</label>
                            <p class="control">
                                <input id="confirm_password" type="password" class="input" name="confirm_password" disabled>
                            </p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button is-primary">
                                Change Password
                            </button>

                            <button class="button is-primary" id="cancel_change_password" type="button">
                                Cancel
                            </button>
                        </div>
                    </div>

                    <div class="field">
                        <label for="birthday" class="label">Date of Birth</label>
                        <p class="control">
                            <input id="birthday" type="date" class="input" name="birthday" value="{{$user->birthday}}" required>
                        </p>
                    </div>
                    <div class="field">
                        <label for="gender" class="label">Gender</label>
                        <p class="control">
                            <input id="gender_male" type="radio" name="gender" value="male">
                            Male
                        </p>
                        <p class="control">
                            <input id="gender_female" type="radio" name="gender" value="female">
                            Female
                        </p>
                        <p class="control">
                            <input id="gender_other" type="radio" name="gender" value="other">
                            Other
                        </p>
                    </div>
                    <script>

                    </script>
                    <div class="field">
                        <label class="label">Bio</label>
                        <p class="control">
                            <input id="bio" class="input" type="text" name="bio" value="{{$user->bio}}">
                        </p>
                    </div>
                    <div class="field">
                        <label class="label">Telephone</label>
                        <p class="control">
                            <input id="telephone" class="input" type="text" name="telephone" value="{{$user->telephone}}">
                        </p>
                    </div>
                    <div class="field">
                        <label class="label">Address</label>
                        <p class="control">
                            <input id="address" class="input" type="text" name="address" value="{{$user->address}}">
                        </p>
                    </div>
                    <div class="form-group">
                        <button class="button is-primary" id="button_change_profile" type="button">
                            Save Changes
                        </button>
                        <a href="{{ action('PageController@show_profile')}}">
                            <button class="button is-primary" type="button">
                                Cancel
                            </button>
                        </a>
                    </div>

                    <div class="form-group" id="change_profile">
                        <div class="field">
                            <label for="confirm_password" class="label">Confirm Password</label>
                            <p class="control">
                                <input id="confirm_password" type="password" class="input" name="confirm_password" required>
                            </p>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button is-primary">
                                Save Changes
                            </button>

                            <button class="button is-primary" id="cancel_change_profile" type="button">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function () {
           $('#change_profile').hide();
           $('#change_password').hide();
           $("input[name=gender][value='{{$user->gender}}']").prop("checked",true);
           $('#button_change_password').click(function () {
                $('#change_password').dialog('open');
           });
           $('#button_change_profile').click(function () {
                $('#change_profile').dialog('open');
           });
            $('#cancel_change_password').click(function () {
                $('#change_password').dialog('close');
            });
            $('#cancel_change_profile').click(function () {
                $('#change_profile').dialog('close');
            });
        });
    </script>
@endsection
