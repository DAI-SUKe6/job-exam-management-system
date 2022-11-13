<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;


class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payments.index', compact('payments'));
    }

    public function edit($id){
        $payments = Payment::find($id);
        return view('admin.payments.edit',compact('payments'));
        
    }

    public function update(Request $request,$id){
        //ตรวจสอบข้อมูล
        $request->validate([
            'payment_amount'=>'required'
        ]);
        $update = Payment::find($id)->update([ 
            'payment_amount'=>$request->payment_amount,
        ]);
        return redirect()->route('payments')->with('success',"Success");
    }


    public function delete($id){
        $delete = Payment::find($id)->forceDelete();
        return redirect()->route('payments')->with('success',"Success");
    }

}
