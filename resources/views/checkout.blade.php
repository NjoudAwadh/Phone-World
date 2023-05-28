@extends('layouts.app')
@section('title','CkeckOut')
@section('content')


<div class="container ">
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4 ">
        <h4 class="d-flex justify-content-between align-items-center mb-3 mt-4 ">
          <span class="text-muted ">سلة الشراء</span>
          
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{$phone->name}}</h6>
              <small class="text-muted"></small>
            </div>
     
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>المجموع (ريال سعودي)</span>
            <strong>{{$phone->total}}</strong>
          </li>
        </ul>
 
      </div>
      <div class="col-md-8 order-md-1 mt-4">
        <h4 class="mb-3 alert alert-dark text-light">{{$phone->name}}</h4>

        <div class="container text-center">
            <form action="{{route('invoic')}}" method="post">
                @csrf
                <input type="hidden" id="phonename" name="phonename" value="{{$phone->name}}">
                <input type="hidden" id="total" name="total" value="{{$phone->total}}">
            <div class="row"> 
                <div class="col"> 
                    <label class="text-dark p-2" for="fullname">الاسم الثلاثي</label>
                    <input type="text" id="fullname" name="fullname" required >
                </div>
                <div class="col">
                    <label for="city" class="text-dark p-2">اختر المدينة</label>
                    <select id="city" name="city" class="form-control">
                    <option value="الرياض">الرياض</option>
                    <option value="جدة">جدة</option>
                    <option value="مكة المكرمة">مكة المكرمة</option>
                    <option value="الدمام">الدمام</option>
                    </select>
                </div>
                
                <div class="col">
                    <label class="text-dark p-2" for="date"> تاريخ الشراء</label> <br>
                    <input type="date" id="date" name="date" class="form-contol" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                <label class="text-dark p-2  " for="phone">رقم الهاتف </label>
                <input type="phone" id="phone" name="phone" required>
                </div>

                <div class="col">
                <label class="text-dark p-2  " for="phone">البريد الإلكتروني </label>
                <input type="email" id="email" name="email" required>
                </div>

                <div class="col">
                <label class="text-dark p-2  " for="address">العنوان</label>
                <input type="address" id="address" name="address">
                </div>
            </div>

            <div class="row  m-5 text-center">
                <div class="col">
                <button type="submit" class="btn text-light btn bg-dark ">إتمام عملية الشراء</button>
                </div>
            </div>
            </div>

        </form>
    </div>
</div>


@endsection