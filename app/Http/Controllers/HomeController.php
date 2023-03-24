<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_table;
class HomeController extends Controller
{
    function HomeIndex(){
        return view('home');
    }
    function DataInsert(Request $request){
        $name =$request->input('name');
        $phone =$request->input('phone');
        $address =$request->input('address');
        $t_amount =$request->input('t_amount');

        $isInsertSuccess = Customer_table::insert(['name'=>$name,'phone'=>$phone,'address'=>$address,'total_amount'=>$t_amount,]);

        if ($isInsertSuccess) echo '<h1>Insert Success</h1>';
        else echo '<h1>fail</h1>';
    }
}
