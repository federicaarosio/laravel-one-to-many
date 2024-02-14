@extends('admin.types.layouts.create-or-edit')

@section('page-title', 'Edit a type')

@section('form-action')
    {{ route('admin.types.update', $type) }}
@endsection

@section('form-method')
    @method('PUT')
@endsection