@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="width: 50rem;">
            <h2 class="p-3">Profile Info</h2>
            <ul class="list-group list-group-flush" style="font-weight: bold">
              <li class="list-group-item">Name: {{ $profile->user->name }}</li>
              <li class="list-group-item">Email: {{ $profile->user->email }}</li>
              <li class="list-group-item">Age: {{ $profile->age }}</li>
              <li class="list-group-item">Phone: {{ $profile->phone }}</li>
              <li class="list-group-item">Address: {{ $profile->address }}</li>
            </ul>
          </div>
          {{-- <hr> --}}
          <h2 class="pl-3 mt-4">My Products</h2>
          <hr>
          <div class="row">
                @foreach ($self_products as $product)
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
