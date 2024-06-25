@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Filters Section -->
        <div class="col-md-3">
            <div class="card" style="background-color: #ffc107;">
                <div class="card-body">
                    <h5 class="card-title">Filter by:</h5>
                    <div class="form-group">
                        <label for="filterOption">Filter options</label>
                        <select class="form-control" id="filterOption">
                            <option value="">Select an option</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <label for="muscleGroup">Muscle groups</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="muscleGroup1">
                            <label class="form-check-label" for="muscleGroup1">
                                Chest
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="muscleGroup2">
                            <label class="form-check-label" for="muscleGroup2">
                                Back
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="muscleGroup3">
                            <label class="form-check-label" for="muscleGroup3">
                                Arms
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="muscleGroup4">
                            <label class="form-check-label" for="muscleGroup4">
                                Legs
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="muscleGroup5">
                            <label class="form-check-label" for="muscleGroup5">
                                Shoulders
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="muscleGroup6">
                            <label class="form-check-label" for="muscleGroup6">
                                Abs
                            </label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="keywords">Keywords:</label>
                        <input type="text" class="form-control" id="keywords" placeholder="Enter keywords">
                    </div>
                </div>
            </div>
        </div>

        <!-- Workouts Section -->
        <div class="col-md-9">
            <!-- Buttons -->
            <div class="mb-3 d-flex" style="background-color: #ffc107; padding: 10px;">
                <button type="button" class="btn btn-warning btn-sm flex-fill mr-2">Add a workout</button>
                <button type="button" class="btn btn-warning btn-sm flex-fill mr-2">Edit a workout</button>
                <button type="button" class="btn btn-warning btn-sm flex-fill">Delete a workout</button>
            </div>

            <div class="card" style="background-color: #07024f;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card" style="background-color: #e0e0e0;">
                                <div class="card-body">
                                    <p class="card-text">Description of workout 1.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card" style="background-color: #e0e0e0;">
                                <div class="card-body">
                                    <p class="card-text">Description of workout 2.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card" style="background-color: #e0e0e0;">
                                <div class="card-body">
                                    <p class="card-text">Description of workout 3.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Add more workout cards as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
