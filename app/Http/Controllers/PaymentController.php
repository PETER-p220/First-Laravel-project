<?php
namespace App\Http\Controllers;
use App\Models\payment;
use Carbon\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade as PDF;

class PaymentController extends Controller
{
     function index():View{
       return View('payment');
    }
    function index1():View{
        $paymentEdit=payment::all();
        return View('PaymentEdit',compact('paymentEdit'));
    }
    public function index2():View{
        return View('paymentUpdate');
    }
    function store(Request $request){
        $payment = new payment;
        $payment->enrollment_no=request('enrollment_no');
        $payment->paid_date=request('paid_date');
        $payment->amount=request('amount');
        $payment->save();

    }
    public function edit_payment($id)
    {
        $payment=payment::find($id);
        return View('paymentUpdate',compact('payment'));
    }
    public function update_payment(Request $request,payment $id){
        $paymentEdit= payment::find($id);
        $paymentEdit->enrollment_no=request('enrollment_no');
        $paymentEdit->paid_date=request('paid_date');
        $paymentEdit->amount=request('amount');
        $paymentEdit->update();
        return View('paymentEdit',compact('paymentEdit'));
    }


    public function delete_payment($id){
        payment::destroy($id);
        return back();
    }
    public function show_payment(payment $id){
        $paymentEdit=payment::find($id);
        return View('view_payment',compact('paymentEdit'));
    }
    public function index4(){
        $payment=payment::all();
        return View('view_payment',compact('payment'));
    }
    public function print(payment $id){
        $paymentEdit=payment::find($id);
        $data=[
            'enrollment_no',
            'start_date',
            'amount',
        ];
        return $pdf->stream('print');

    }
}
