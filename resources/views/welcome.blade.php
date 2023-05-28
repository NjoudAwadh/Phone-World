
@extends('layouts.app')

@section('title','Home')

@section('content')

<div class="card m-5">
    <div class="card-body ">
      <div class="container text-center">
        <h2 class="p-5" > مرحبا بكم في </h2>
        
         <a href="{{route('phonetype')}}" class="btn text-light btn bg-dark m-5">متجر عالم الهواتف</a>
</div>
 

    </div>
</div>
@endsection

