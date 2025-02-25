@extends('layouts.app')

@section("title", $viewData["title"])
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create product</div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul id="errors" class="alert alert-danger list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ route('product.save') }}"> @csrf
                            <input 
                                type="text" 
                                class="form-control mb-2" 
                                placeholder="Name" 
                                name="name" 
                                value="{{ old('name') }}" 
                            />
                            <select
                                class="form-control mb-2" 
                                name="type">
                                <option value="">Select a type</option>
                                <option value="Car" {{ old('type') == 'Car' ? 'selected' : '' }}>Car</option>
                                <option value="Airplane" {{ old('type') == 'Airplane' ? 'selected' : '' }}>Airplane</option>
                            </select>
                            
                            <input 
                                type="text" 
                                class="form-control mb-2" 
                                placeholder="Description" 
                                name="description" 
                                value="{{ old('description') }}" 
                            />
                            <input 
                                type="number" 
                                class="form-control mb-2" 
                                placeholder="Price" 
                                name="price" 
                                value="{{ old('price') }}" 
                            />
                            <input 
                                type="text" 
                                class="form-control mb-2" 
                                placeholder="Brand" 
                                name="brand" 
                                value="{{ old('brand') }}" 
                            />
                            <input 
                                type="number" 
                                class="form-control mb-2" 
                                placeholder="Stock Quantity" 
                                name="stockQuantity" 
                                value="{{ old('stockQuantity') }}" 
                            />
                            <input type="submit" class="btn btn-primary" value="Send" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection