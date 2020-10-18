@extends('layouts.main')
@section('create')
    <div class="container mt-5">
        <form action="{{ route('adminproducts') }}" method="POST">
            @csrf
            <input type="text" class="form-control" name="title">
            <input type="text" class="form-control" name="text">
            <textarea name="short_description" class="form-control"></textarea>
            <button class="btn btn-primary w-100">save</button>
        </form>
@endsection