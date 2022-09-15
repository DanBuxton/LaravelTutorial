@extends('layouts.app')

@section('title', 'Module Listing')

@section('content')

    <h1>List of Modules</h1>

    <ul>
        @foreach($modules as $module)

            <li>{{ $module->id }}: {{ $module->name }}</li>

        @endforeach
    </ul>

@endsection