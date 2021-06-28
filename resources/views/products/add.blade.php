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

                    <div class="card">
                        <div class="card-header">
                            
                            <h2>ADD STUDENT<a href="{{ route("student.all") }}" class="btn btn-primary"> All Students List</a></h2>
                            
                        </div>
                        <div class="card-body">
                            <form action="{{ route('student.store') }}" method="POST">

                                @csrf
                                  <div class="mb-3">
                                      <label>Student Name</label>
                                      <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                  
                                  </div>
                                  <div class="mb-3">
                                      <label >Student Roll</label>
                                      <input type="number" name="roll" class="form-control" value="{{ old('roll') }}">
                                    </div>
                                  <div class="mb-3">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                  </div>
                                  <div class="mb-3">
                                      <label >Address</label>
                                      <textarea type="text" name="address" class="form-control">{{ old('address') }}</textarea>
                                    </div>
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @endsection