<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index(){
        return Payment::all();
    }

    public function show($id){
        return Payment::findOrFail($id);
    }

    public function store(Request $request){
        $request->validate([
           'project_id'=>'required|exists:projects,id',
           'user_id'=>'required|exists:users,id', 
           'payment_amount' =>'required|numeric',
           'payment_method' => 'required',
        ]);
        return Payment::create($request->all());
    }

    public function update(Request $request, $id){
        $payment = Payment::findOrFail( $id );
        $payment->update($request->all());

        return $payment;
    }
 public function destroy($id){

    $payment = Payment::findOrFail( $id );
    $payment->delete();

    return response()->json(['message'=> 'Payment Deleted']);
}

}
