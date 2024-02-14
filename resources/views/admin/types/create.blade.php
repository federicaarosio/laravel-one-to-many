@extends('admin.types.layouts.create-or-edit')

@section('page-title', 'Create a new type')

@section('form-action')
    {{ route('admin.types.store') }}
@endsection

@section('form-method')
    @method('POST')
@endsection