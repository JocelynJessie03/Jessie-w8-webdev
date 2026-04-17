@extends('base.base')
@section('content')
    <h1>My Homepage</h1>
    <div class="row eow-cols-1 row-cols-md-3 g-4">
        @foreach ($product_categories as $product_category)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product_category->name }}</h5>
                        <p class="card-text">{{ $product_category->description }}</p>
                        <p class="card-text">Total {{ $product_category->products->count() }} products</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>  
@endsection