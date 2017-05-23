@extends('layouts.app')

@section('content')
    <?php
      if (session()->has('edituser')){
        $user = session('edituser');
      }
    ?>
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
                    @if(\Illuminate\Support\Facades\Session::has('success_change_password'))
                        <div class="notification is-primary" id="success_change_password">
                            {{ \Illuminate\Support\Facades\Session::get('success_change_password') }}
                        </div>
                    @endif
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <input type="hidden" name="_method" value="PUT">
                        <p class="control">
                            <input id="name" type="text"
                                   class="input"
                                   name="name" value="{{$user->name}}" required>
                        </p>
                    </div>
                    <div class="field">
                        <script>
                            wrong_email = false;
                        </script>
                        <label for="email" class="label">E-Mail Address</label>
                        <p class="control">
                            <input id="email" type="email"
                                   class="input"
                                   name="email" value="{{$user->email}}" required>
                            </p>
                    </div>
                    <div class="field"></div>
                    @if(\Illuminate\Support\Facades\Session::has('email_already_used'))
                        <div class="notification is-danger" id="email_already_used">
                            {{ \Illuminate\Support\Facades\Session::get('email_already_used') }}
                        </div>
                        <script>
                            wrong_email = true;
                        </script>
                    @endif
                    <div class="field" id="group_btn_change_pass">
                        <label for="password" class="label">Password</label>
                        <button class="button is-primary" id="button_change_password" type="button">
                            Change Password
                        </button>
                    </div>

                    <div class="form-group" id="change_password">
                        <script>
                          var wrong_new_password = false;
                        </script>
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
                                       class="input " name="new_password" disabled>
                                </p>
                        </div>
                        <div class="field">
                            <label for="confirm_password" class="label">Confirm Password</label>
                            <p class="control">
                                <input id="confirm_password" type="password" class="input" name="confirm_password" disabled>
                            </p>
                        </div>
                        @if(\Illuminate\Support\Facades\Session::has('wrong_new_password'))
                            <div class="notification is-danger" id="wrong_new_password">
                                {{ \Illuminate\Support\Facades\Session::get('wrong_new_password') }}
                            </div>
                            <script>
                                wrong_new_password = true;
                            </script>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="button is-primary">
                                Save Password
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
                            <label for="gender_male" >Male</label>
                        </p>
                        <p class="control">
                            <input id="gender_female" type="radio" name="gender" value="female">
                            <label for="gender_female" >Female</label>
                        </p>
                        <p class="control">
                            <input id="gender_other" type="radio" name="gender" value="other">
                            <label for="gender_other" >Other</label>
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
                    <div class="form-group" id="group_btn_edit_profile">
                        <button class="button is-primary" id="button_change_profile" type="button">
                            Save Changes
                        </button>
                        <a href="{{ action('PageController@show_profile')}}">
                            <button class="button is-primary" type="button">
                                Cancel
                            </button>
                        </a>
                    </div>
                    <div class="field"></div>
                    <script>
                        var pass_match = true;
                    </script>
                    @if(\Illuminate\Support\Facades\Session::has('password_not_match'))
                        <div class="notification is-danger" id="password_not_match">
                            {{ \Illuminate\Support\Facades\Session::get('password_not_match') }}
                        </div>
                        <script>
                            pass_match = false;
                        </script>
                    @endif
                    <div class="field"></div>
                    <div class="form-group" id="change_profile">
                        <div class="field">
                            <label for="confirm_changes" class="label">Confirm Password</label>
                            <p class="control">
                                <input id="confirm_changes" type="password" class="input" name="confirm_changes" disabled>
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
            $("input[name=gender][value='{{$user->gender}}']").prop("checked",true);
            $('#change_password').hide();


            if(pass_match) {
                $('#change_profile').hide();
            } else {
                $('#group_btn_edit_profile').hide();
                $('#confirm_changes').prop('disabled', false);
                $('#confirm_changes').prop('required', true);
                $('#confirm_changes').focus();
            }
            if(wrong_email){
              $('#email').focus();
            }

            $('#button_change_password').click(function () {
//                alert("The paragraph was clicked.");
                $('#change_password').show();
                $('#old_password').prop('disabled', false);
                $('#new_password').prop('disabled', false);
                $('#confirm_password').prop('disabled', false);
                $('#old_password').prop('required', true);
                $('#new_password').prop('required', true);
                $('#confirm_password').prop('required', true);
                $('#old_password').focus();
                $('#group_btn_change_pass').hide();
            });
            $('#button_change_profile').click(function () {
                $('#change_profile').show();
                $('#confirm_changes').prop('disabled', false);
                $('#confirm_changes').prop('required', true);
                $('#group_btn_edit_profile').hide();
            });
            $('#cancel_change_password').click(function () {
                $('#change_password').hide();
                $('#old_password').prop('required', false);
                $('#new_password').prop('required', false);
                $('#confirm_password').prop('required', false);
                $('#old_password').prop('disabled', true);
                $('#new_password').prop('disabled', true);
                $('#confirm_password').prop('disabled', true);
                if(wrong_new_password){
                  $('#wrong_new_password').hide();
                }
                $('#group_btn_change_pass').show();
            });
            $('#cancel_change_profile').click(function () {
                $('#change_profile').hide();
                $('#confirm_changes').prop('required', true);
                $('#confirm_changes').prop('disabled', false);
                $('#group_btn_edit_profile').show();
            });
            if(wrong_new_password){
              $('#button_change_password').trigger("click");
              $('#cancel_change_password').focus();
            }
        });
    </script>
@endsection
