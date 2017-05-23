@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Header -->
        <div class="columns">
            <hr>
            <div class="column is-3"></div>
            <div class="column is-6">
                <p class="title is-2">{{$title}}</p>
            </div>
            <hr>
        </div>
        <div class="columns">
            <!-- left column -->
            <div class="column is-3">
            </div>
            <!-- edit form column -->
            <div class="column is-6 has-text-left hero is-light">
                <h3 class="subtitle is-3">Personal information</h3>
                <br>
                <div class="field">
                    <label class="label is-large hero is-primary">Name</label>
                    <span>
                    <p class="subtitle-6 is-bold">
                        {{$user->name}}
                    </p>
                    </span>
                </div>
                <div class="field">
                    <label class="label is-large hero is-primary">E-Mail Address</label>
                    <span>
                    <p class="subtitle-6 is-bold">
                        {{$user->email}}
                    </p>
                    </span>
                </div>
                <div class="field">
                    <label class="label is-large hero is-primary">Date of Birth</label>
                    <span>
                    <p class="subtitle-6 is-bold">
                        {{$user->birthday}}
                    </p>
                    </span>
                </div>
                <div class="field">
                    <label for="gender" class="label is-large hero is-primary">Gender</label>
                    <p class="subtitle-6 is-bold">
                        {{$user->gender}}
                    </p>
                </div>
                <div class="field">
                    <label class="label is-large hero is-primary">Bio</label>
                    <span>
                    <p class="subtitle-6 is-bold">
                        {{$user->bio}}
                    </p>
                    </span>
                </div>
                <div class="field">
                    <label class="label is-large hero is-primary">Telephone</label>
                    <span>
                    <p class="subtitle-6 is-bold">
                       {{$user->telephone}}
                    </p>
                    </span>
                </div>
                <div class="field">
                    <label class="label is-large hero is-primary">Address</label>
                    <span>
                    <p class="subtitle-6 is-bold">
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
