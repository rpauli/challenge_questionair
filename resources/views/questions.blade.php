// resources/views/questions.blade.php

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->

        <!-- New question Form -->
        <form action="/question" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- question Name -->
            <div class="form-group">
                <label for="question" class="col-sm-3 control-label">Question</label>

                <div class="col-sm-6">
                    <input type="text" name="text" id="question-name" class="form-control">
                </div>
            </div>

            <!-- Add Question Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Question
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- TODO: Current Questions -->
@endsection