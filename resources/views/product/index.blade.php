@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="row">
    @if($viewData['msg'])
        <div class="alert alert-success">{{ $viewData['msg'] }}</div>
    @endif
    @foreach ($viewData["products"] as $product)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card">
                <div class="card-header">
                    {{ $product["name"] }}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Type: {{ $product["type"] }}</p>
                        <footer class="blockquote-footer">
                            <cite title="Source Title">Built by: {{ $product["brand"] }}</cite>
                        </footer>
                    </blockquote>
                </div>
                <div class="card-body text-center">
                    <a 
                        href="{{ route('product.show', ['id'=> $product["id"]]) }}" 
                        class="btn bg-primary text-white"
                    >
                        + Info
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection