@extends('base')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('content')
  <h1>{{ $project->name }}</h1>
  <img src="{{ asset($project->image) }}" alt="{{ $project->name }}">
  <p>{{ $project->description }}</p>
  <h3>Features:</h3>
  <p>{{ $project->features }}</p>
@endsection
