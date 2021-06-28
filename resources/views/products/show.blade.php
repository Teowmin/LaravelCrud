@extends('layouts.app')

@section('content')
   <section>
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-md-10">

                   <div class="card" style="border: 3px solid black; border-radius:30px;">
                       <div class="card-header" style="border-bottom: 3px solid black;">
                           
                           <div class="row justify-content-center">
                            <h2> <a href="{{ route('index.products') }}" class="btn btn-primary">All Products List</a></h2>
                           </div>
                           
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered" style="border: 3px solid black;">
                                <tr>
                                    <td width="20%">NAME</td>
                                    <td width="5%">:</td>
                                    <td width="75%">{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <td width="20%">CATEGORY</td>
                                    <td width="5%">:</td>
                                    <td width="75%">{{ $data->category }}</td>
                                </tr>
                                <tr>
                                    <td width="20%">PRICE</td>
                                    <td width="5%">:</td>
                                    <td width="75%">{{ $data->price }}</td>
                                </tr>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection