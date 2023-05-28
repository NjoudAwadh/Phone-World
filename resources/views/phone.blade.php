
@extends('layouts.app')
@section('title','Phone')
@section('content')

<div class="container">
   <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">

@foreach ($phones as $phone)

<div class="card text-center m-3">
   <div class="card-header "><h3 class="card-title">{{$phone->name}}</h3>
   </div>

   
   <div class="card-body ">
      <img src="{{$phone->image}}"  height="400" width="400" style=" margin-left: auto;
   margin-right: auto;">
     <h5 class="card-title">{{$phone->name}}</h5>
     <p class="card-text">{{$phone->display}}</p>
   </div>
   <div class="card-footer">
      <h5 class="text-dark ">{{$phone->total}}</h5> 
    
     <a href="checkout/{{$phone->id}}}"> <small class="text-light btn bg-dark ">اشتر الان</small></a>
   </div>
 </div>
 

@endforeach

      </div>
      <div class="col-sm-2"></div>
   </div>
</div>


 
   
@endsection