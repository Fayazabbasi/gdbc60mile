@extends('frontend.layouts.app')

@section('title', $program->name)

@section('content')

<div class="container">

    <h1>{{ $program->name }}</h1>

    <p><strong>Code:</strong> {{ $program->code }}</p>

    <p><strong>Degree Type:</strong> {{ $program->degree_type }}</p>

    <p><strong>Duration:</strong> {{ $program->duration }}</p>

    <p><strong>Eligibility:</strong> {{ $program->eligibility }}</p>

    <p><strong>Fee:</strong> {{ $program->fee }}</p>

    <hr>

    <h4>Description</h4>

    <p>
        {{ $program->description }}
    </p>

</div>

@endsection