@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Welcome {{ Auth::user()->name }}!
            </h1>
            <h2>
                This is the Admin Dashboard
            </h2>
        </div>
    </div>
</div>
@endsection
