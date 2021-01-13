@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 60px;">
   <form action="{{ route('store') }}" method="post">
    @csrf
    <div>
        <h1>Add new product</h1>
    </div>
    <div class="row pl-2 mt-3">     
        <label for="title"><strong>Title</strong></label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <strong class="error" style="color: red; font-size: 12px;">{{ $message }}</strong>
        @enderror
    </div>
    <div class="row pl-2 mt-3">     
        <label for="description"><strong>Description</strong></label>
        <textarea type="text" class="form-control" id="description" name="description">
            {{ old('description') }}
        </textarea>
        @error('description')
            <strong class="error" style="color: red; font-size: 12px;">{{ $message }}</strong>
        @enderror
    </div>
    <div class="pt-3">
        <button class="btn btn-primary w-25">Create</button>
    </div>
   </form>
</div>
@endsection
