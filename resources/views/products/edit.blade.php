@extends('layouts.app')


@section('content')
<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
            
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          
            @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif

            <div class="card" style="border: 3px solid black; border-radius:30px;">
                <div class="card-header" style="border-bottom: 3px solid black;">
                    <div class="row justify-content-center">
                        <a href="{{ route('index.products') }}" class="btn btn-primary">ALL PRODUCTS LIST</a>
                    </div>
                </div>
                <div class="card-body">
                <form action="{{ route('update.products', $data->id) }}" method="POST">

                    @csrf
                      <div class="mb-3">
                          <label>Product Name</label>
                          <input type="text" name="name" class="form-control" value="{{ old('name') }}">
      
                      </div>
                      <div class="mb-3">
                          <label >Product Price</label>
                          <input type="number" name="category" class="form-control" value="{{ old('category') }}">
                        </div>
                      <div class="mb-3">
                          <label >Product Category</label>
                          <textarea type="text" name="price" class="form-control">{{ old('price') }}</textarea>
                        </div>
                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary" >UPDATE</button>
                            </div>
                    </form>
                </div>
                
            </div>
        </div>
      </div>  
    </div>
</section>
@endsection