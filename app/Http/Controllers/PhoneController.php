<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PhoneController extends Controller
{
    public function PhoneType(){

        $phone= DB::table('phones') ->get();

        return view('phone' , [ 'phones'=>$phone]);
    }


    public function CheckOut($id){
      $phone=DB::table('phones')->where('id' ,'=', $id) ->first();
      
        return view('checkout' ,['phone'=>$phone]);
    }


    public function invoice(Request $request){

       $row= [
        'name'=>$request->fullname,
        'city'=>$request->city,
        'date'=>$request->date,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address,
        'phone_name'=>$request->phonename,
        'total'=>$request->total,
       ];

   
       $check=DB::table('invoic')-> where('phone' ,'=' , $request->phone) ->first();
       if($check==null){ 
        DB::table('invoic')->insert($row);
       }
       

       $invoices=DB::table('invoic')-> where('phone' ,'=' , $request->phone) ->first();
     
       return view('/invoice' , ['invoice'=> $invoices ]);
    }



}
