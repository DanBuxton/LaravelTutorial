@extends('layouts.app')

@section('title', 'Module Listing')

@section('content')

    <h1>List of Modules</h1>

    <ul>
        @foreach($modules as $module)

            <li>
                <a href="{{ route('modules.show', $module) }}">{{ $module->id }}: {{ $module->name }}</a>
            </li>

        @endforeach
    </ul>

    @can('create', \App\Module::class)
        <div>
            <a href="{{ route('modules.create') }}">Add Module</a>
        </div>
    @endcan

@endsection