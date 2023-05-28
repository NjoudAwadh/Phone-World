
@extends('layouts.app')
@section('title','Invoice')
@section('content')

<div class="container" style="direction: rtl; ">
    

<div class="card m-5">
    <div class="card-body mx-4">
      <div class="container">
        <p class="my-5 mx-5 text-center" style="font-size: 30px;">شكرا لشرائكم</p>
        <div class="row">
          <ul class="list-unstyled">
            <li class="text-black">{{$invoice->name}}</li>
            <li class="text-muted mt-1"><span class="text-black">الفاتورة</span> {{$invoice->id}}</li>
            <li class="text-black mt-1">{{$invoice->date}}</li>
          </ul>
          <hr>
          <div class="col-xl-10">
            <p>اسم المنتج</p>
          </div>
          <div class="col-xl-2">
            <p class="float-end">{{$invoice->phone_name}}
            </p>
          </div>
          <hr>
        </div>
        <div class="row">
          <div class="col-xl-10">
            <p>سعر المنتج</p>
          </div>
          <div class="col-xl-2">
            <p class="float-end">{{$invoice->total}} ريال سعودي
            </p>
          </div>
          <hr>
        </div>
        <div class="row">
          <div class="col-xl-10">
          
          </div>
          <div class="col-xl-2">
        
          </div>
          <hr style="border: 2px solid black;">
        </div>
        <div class="row text-black">
  
          <div class="col-xl-12">
            <p class="float-end fw-bold">المجموع: {{$invoice->total}} ريال سعودي
            </p>
          </div>
          <hr style="border: 2px solid black;">
        </div>
    </div>
  </div>
</div>
  @endsection