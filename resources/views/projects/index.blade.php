@extends('layout')

@section('content')
    Project index
    @foreach ($projects as $project)
        Title : {{ $project->title}}
    @endforeach
@endsection

