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
                    </div>
                </div>

                <!-- edit form column -->
                <div class="column is-9">
                    {{--<div class="alert alert-info alert-dismissable">--}}
                        {{--<a class="panel-close close" data-dismiss="alert">×</a>--}}
                        {{--<i class="fa fa-coffee"></i>--}}
                        {{--This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
                    {{--</div>--}}
                    <h3>Personal information</h3>

                        <div class="field">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="field">
                            <label class="label">Name</label>
                            <span>
                            <p class="control">
                                {{$user->name}}
                            </p>
                            </span>
                        </div>
                        <div class="field">
                            <label class="label">E-Mail Address</label>
                            <span>
                            <p class="control">
                                {{$user->email}}
                            </p>
                            </span>
                        </div>
                        <div class="field">
                            <label class="label">Date of Birth</label>
                            <span>
                            <p class="control">
                                {{$user->birthday}}
                            </p>
                            </span>
                        </div>
                        <div class="field">
                            <label for="gender" class="label">Gender</label>
                            <p class="control">
                                {{$user->gender}}
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">Bio</label>
                            <span>
                            <p class="control">
                                {{$user->bio}}
                            </p>
                            </span>
                        </div>
                        <div class="field">
                            <label class="label">Telephone</label>
                            <span>
                            <p class="control">
                               {{$user->telephone}}
                            </p>
                            </span>
                        </div>
                        <div class="field">
                            <label class="label">Address</label>
                            <span>
                            <p class="control">
                                {{$user->address}}
                            </p>
                            </span>
                        </div>

                        <div class="form-group">
                            <a href="{{ action('PageController@edit_profile')}}">
                            <button class="button is-primary">
                                Edit Profile
                            </button>
                            </a>
                            <a href="{{ action('PageController@index')}}" class="button-green">
                            <button class="button is-primary">
                                Back
                            </button>
                            </a>
                        </div>
                </div>
            </div>

    </div>
@endsection
