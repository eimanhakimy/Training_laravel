@extends('layouts.app')
@section('header')
<h1>Create New Product</h1>
@endsection

@section('content')

    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <div class="mb-3 form-check">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
            @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong> {{ $message }}</strong>
                  </span>
              @enderror    
          </div>

          <div class="mb-3 form-check">
            <label for="desc" class="form-label">Description</label>
            <input type="text" class="form-control @error('desc') is-invalid @enderror" id="desc" name="desc">
            @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong> {{ $message }}</strong>
                  </span>
              @enderror    
          </div>

          <div class="mb-3 form-check">
            <label for="price" class="form-label">Price</label>
            <input type="decimal" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
            @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong> {{ $message }}</strong>
                  </span>
              @enderror    
          </div>

          <div class="mb-3 form-check">
            <label for="stock" class="form-label">Stock</label>
            <input type="int" class="form-control @error('stock') is-invalid @enderror" id="stock" name="stock">
            @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong> {{ $message }}</strong>
                  </span>
              @enderror    
          </div>


          
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection