@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)
        <div class="card" style="width: 18rem; margin: auto; margin-bottom: 10px; background: rgb(245, 231, 206);">
            <div class="card-body">
              <h5 class="card-title"><p style="font-weight: bold">{{ $product->title }}</p></h5>
              <h6 class="card-subtitle mb-2 text-muted"><p>{{ $product->user->name }}</p></h6>
              <p class="card-text"><p>{{ $product->description }}</p></p>
              <p class="text-muted">{{ $product->created_at }}</p>
              @can('update', $product)
              <a href="{{ route('edit', $product->id) }}" class="card-link">update</a>
              @endcan
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection   
