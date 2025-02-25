@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="d-flex justify-content-center flex-column">
    <div class="card w-100">
        <div class="card-header">
            {{ $viewData["product"]["name"] }}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Type: {{ $viewData["product"]["type"] }}</li>
            <li class="list-group-item">Description: {{ $viewData["product"]["description"] }}</li>
            <li class="list-group-item">Price: ${{ $viewData["product"]["price"] }}</li>
            <li class="list-group-item">Brand: {{ $viewData["product"]["brand"] }}</li>
            <li class="list-group-item">Stock Quantity: {{ $viewData["product"]["stockQuantity"] }}</li>
        </ul>
    </div>
    <div class="text-center mt-2">
        <a 
            {{-- href="{{ route('product.show', ['id'=> $product["id"]]) }}"  --}}
            class="btn btn-danger text-black"
        >
            Delete Product
        </a>
    </div>
</div>
@endsection