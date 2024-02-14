@extends('layouts.admin')

@section('title', 'Admin Type Show')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                {{ $type -> name}}
            </h1>
    
            <div>
                <p>
                    This a description of the "{{ $type->name }}" type.
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
