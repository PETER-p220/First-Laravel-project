<?php
namespace App\Http\Controllers;
use App\Models\payment;
use Carbon\Factory;
use Stripe\Stripe;
use Stripe\PaymentIntent;
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
        $payment=payment::all();
        return View('paymentUpdate',compact('payment'));
    }
    function store(Request $request){
        $payment = new payment;
        $payment->enrollment_no=request('enrollment_no');
        $payment->paid_date=request('paid_date');
        $payment->amount=request('amount');
        $payment->save();
        return redirect('PaymentEdit')->with('success','New Payment Added');
    }
    public function edit_payment($id)
    {
        $payment=payment::find($id);
        return View('paymentUpdate',compact('payment'));
    }
    public function update_payment(Request $request,$id){
        $payment= payment::find($id);
        $payment->enrollment_no=request('enrollment_no');
        $payment->paid_date=request('paid_date');
        $payment->amount=request('amount');
        $payment->update();
        return redirect('PaymentEdit')->with('success','Payment Added');
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
    public function createPaymentIntent(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $paymentEdit = PaymentIntent::create([
                'amount' => $request->amount * 100, // Amount in cents
                'currency' => 'usd',
                'payment_method_types' => ['card'],
            ]);

            return response()->json([
                'clientSecret' => $paymentEdit->client_secret
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

}
}
