@extends('layouts.app')

@section('title', 'Create Tutorial')

@section('content')

    <header class="jumbotron">
        <h1>Create Tutorial for {{ $module->name }}</h1>
    </header>

    <form action="{{ route('modules.tutorials.store', $module) }}" method="post">

        @csrf

        <div class="form-group row">

            <label class="col-form-label col-sm-4 text-right" for="module_id">
                Module Id:
            </label>
            <input type="text" id="module_id" name="module_id" class="form-control-plaintext col-sm-2" readonly
                value="{{ $module->id }}">

        </div>

        <div class="form-group row">

            <label class="col-form-label col-sm-4 text-right" for="time_start">
                Start Time:
            </label>
            <input type="datetime-local" id="time_start"
                class="form-control col-sm-2 @error('time_start') is-invalid @enderror" name="time_start"
                value="{{ old('time_start') }}">

            @error('time_start')
                <span class="col invalid-feedback text-left">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group row">

            <label class="col-form-label col-sm-4 text-right" for="time_end">
                End Time:
            </label>
            <input type="datetime-local" id="time_end"
                class="form-control col-sm-2 @error('time_end') is-invalid @enderror" name="time_end"
                value="{{ old('time_end') }}">

            @error('time_end')
                <span class="col invalid-feedback text-left">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group row">

            <label class="col-form-label col-sm-4 text-right" for="room">
                Room:
            </label>
            <input type="text" id="room" class="form-control col-sm-2 @error('room') is-invalid @enderror"
                name="room" value="{{ old('room') }}">

            @error('room')
                <span class="col invalid-feedback text-left">{{ $message }}</span>
            @enderror

        </div>


        <div class="form-group row">

            <label class="col-form-label col-sm-4 text-right" for="tutors">
                Select Tutors:
            </label>
            <select id="tutors" class="form-control col-sm-2 @error('tutors') is-invalid @enderror" name="tutors[]"
                multiple size="{{ count($tutors) }}">

                @foreach ($tutors as $tutor)
                    <option value="{{ $tutor->id }}">{{ $tutor->name }}</option>
                @endforeach

            </select>

            @error('tutors')
                <span class="col invalid-feedback text-left">{{ $message }}</span>
            @enderror

        </div>

        <div class="col-sm-8 text-right">

            <input type="submit" name="submit" class="btn btn-primary" value="Add Tutorial">

        </div>

    </form>


@endsection
