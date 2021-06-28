@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 style="font-weight: 800; background:white; border:2px solid black; border-radius:30px; padding-left:5px; padding-right:5px;">ALL PRODUCTS INFO</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 py-5">

              <div class="card" style="border: solid black; border-radius:30px;">
                
                <div class="card-header py-4">
                  <section>
                    <table class="table table-dark" >
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">ADD TIME</th>
                            <th scope="col">UPDATE TIME</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($data as $single_data)
                          <tr> 
                              <td>{{ $single_data->id }}</td>
                              <td>{{ $single_data->name }}</td>
                              <td>{{ $single_data->price }}</td>
                              <td>{{ $single_data->price }}</td>
                              <td>{{ $single_data->created_at->diffForHumans() }}</td>
                              <td>{{ $single_data->updated_at->diffForHumans() }}</td>
                              <td>
                                  <a href="{{ route('show.products', $single_data->id) }}" class="badge badge-primary">View</a> 
                                  <a href="{{ route('edit.products',$single_data->id) }}" class="badge badge-warning">Edit</a>  
                                  <form class="d-inline" action="{{ route('delete.products', $single_data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="badge badge-danger" type="submit">Delete</button>
                                  </form>
                              </td>
                          </tr>
                      @empty
                          
                      @endforelse
                        </tbody>
                      </table>
                </section>
                </div>
                <div class="card-body" style="border-top:3px solid black;">
                  <div class="row justify-content-center">
                    <a href="{{ route('create.products') }}" class="btn btn-primary" >ADD PRODUCT</a>
                  </div>
                </div>
              </div>
                
            </div>
        </div>
    </div>
@endsection 

