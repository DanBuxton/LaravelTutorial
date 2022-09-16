@extends('layouts.app')

@section('title', 'Create Module')

@section('content')

    <header class="jumbotron">
        <h1>Create a new module</h1>
    </header>


    <form action="{{ route('modules.store') }}" method="post" novalidate>

        @csrf

        <div class="form-group row">

            <label class="col-form-label col-sm-4 text-right" for="id">
                Module Id:
            </label>
            <input
                type="text"
                id="id"
                class="form-control col-sm-2 @error('id') is-invalid @enderror"
                name="id"
                maxlength="15"
                required
                value="{{ old('id') }}"
                placeholder="module id">

            @error('id')
            <span class="col invalid-feedback text-left">
                        {{ $message }}
                    </span>
            @enderror

        </div>

        <div class="form-group row">
            <label class="col-form-label col-sm-4 text-right" for="name">
                Module Name:
            </label>
            <input
                type="text"
                id="name"
                class="form-control col-sm-4 @error('id') is-invalid @enderror"
                name="name"
                maxlength="50"
                required
                placeholder="module name">


            @error('name')
            <span class="col invalid-feedback text-left">{{ $message }}</span>
            @enderror

        </div>

        <div class="form-group row">

            <label class="col-form-label col-sm-4 text-right" for="lead_tutor_id">
                Module Leader:
            </label>
            <select
                id="lead_tutor_id"
                class="form-control col-sm-2 @error('lead_tutor_id') is-invalid @enderror"
                name="lead_tutor_id"
                required>

                <option value="">Choose an option</option>

                @foreach($tutors as $tutor)

                    <option value="{{ $tutor->id }}">
                        {{ $tutor->name }}
                    </option>

                @endforeach

            </select>


            @error('lead_tutor_id')
            <span class="col invalid-feedback text-left">{{ $message }}</span>
            @enderror

        </div>

        <br>

        <div class="col-sm-8 text-right">

            <input type="submit" name="submit" class="btn btn-primary" value="Create Module">

        </div>

    </form>


@endsection