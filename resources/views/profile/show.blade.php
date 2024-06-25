@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Profile for {{ $user->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">User Details:</h5>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <!-- Add more user details as needed -->

                    <hr>

                    <h5 class="card-title">Workouts:</h5>
                    @if ($workouts->isEmpty())
                        <p>No workouts found.</p>
                    @else
                        <div class="list-group">
                            @foreach ($workouts as $workout)
                                <a href="#" class="list-group-item list-group-item-action">
                                    {{ $workout->title }}
                                    <!-- Display more workout details if needed -->
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
