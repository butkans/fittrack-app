<!-- resources/views/users.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    User Listing
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($users as $user)
                            <li class="list-group-item">
                                <a href="{{ route('profile.show', ['user' => $user]) }}">{{ $user->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
