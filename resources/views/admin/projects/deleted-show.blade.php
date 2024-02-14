@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                {{ $project -> title}}
            </h1>

            <img src="{{ $project -> cover_image }}" alt="project image">

            <div>a project by {{ $project -> author }}</div>
            <div>creation date: {{ $project -> creation_date  }}</div>

            <div>
                <p>
                    {{ $project->description }}
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
