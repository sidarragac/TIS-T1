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
                <div class="card-body text-center">
                    <a 
                        {{-- href="{{ route('product.show', ['id'=> $product["id"]]) }}"  --}}
                        class="btn bg-primary text-white"
                    >
                        {{ $product["name"] }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection