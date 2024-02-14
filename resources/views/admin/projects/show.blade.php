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

            <div>
                <strong>a project by: </strong>{{ $project -> author }}
            </div>
            <div>
                <strong>creation date: </strong>{{ $project -> creation_date  }}
            </div>

            <div>
                <p>
                    <strong>description: </strong>{{ $project->description }}
                </p>
                <p>
                    <strong>Type: </strong>{{ $project-> type -> name}}
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
