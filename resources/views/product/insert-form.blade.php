@extends('base.base')
 
@section('content')
    <h1>Insert New Product</h1>
    <form action="{{ route('insert_product') }}" class="row g-3"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- gausah handle error klo ga diisi kan ga mandatory --}}
        <div class="col-12">
            <label for="details" class="form-label">Product Details</label>
            <input type="text" class="form-control" id="details" name="details" placeholder="Input product details here...">

        </div>
       
        <div class="col-md-6">
            <label for="product_category" class="form-label">Product Category</label>
            <select id="product_category" class="form-select @error('product_category') is-invalid @enderror" name="product_category" >
              <option value="" selected disabled>Select a product Category</option>
              @foreach ($product_categories as $product_category)
                <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
              @endforeach
            </select>
            @error('product_category')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="stock" class="form-label">Initial Stock</label>
            <input type="number" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock" placeholder="Input initial stock here...">
            @error('stock')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-12">
            <label for="image" class="form-label">Product Image (jpg, jpeg, png)</label>
            <input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png">
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </div>
    </form>
@endsection