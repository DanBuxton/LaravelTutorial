@extends('layouts.app')

@section('title', 'Detail View')

@section('content')

    <h1>{{ $module->name }}</h1>
    <p>Module Leader: {{ $module->leader->name }}</p>

    <h2>Tutorials</h2>

    <ul>
        @foreach($module->tutorials as $tutorial)

            <li>
                {{ \Carbon\Carbon::parse($tutorial->time_start)->format('l') }}'s from
                {{ \Carbon\Carbon::parse($tutorial->time_start)->format('Y:i') }} to
                {{ \Carbon\Carbon::parse($tutorial->time_end)->format('Y:i') }} in
                {{ $tutorial->room }} with
                {{ implode( ' | ', $tutorial->tutors->map( function ($t) { return $t->name; })->toArray()) }}
            </li>

        @endforeach
    </ul>

    <h2>Contact Details</h2>

    <dl>
        @foreach($module->uniqueTutors as $tutor)

            <dt>{{ $tutor->name }}</dt>

            <dd>Room: {{ $tutor->room }}</dd>
            <dd>Email: <a href="mailto: {{ $tutor->email }}">{{ $tutor->email }}</a></dd>
        @endforeach

    </dl>

    @can('create', \App\Module::class)
        <div>
            <a href="{{ route('modules.tutorials.create', $module) }}">Add Tutorial</a>
        </div>
    @endcan

    <div>
        <a href="/modules">Back to modules listing</a>
    </div>

@endsection