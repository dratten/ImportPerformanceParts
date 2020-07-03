<?php

namespace App\Http\Controllers;


use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SmoDav\Mpesa\Laravel\Facades\STK;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use SmoDav\Mpesa\Laravel\Facades\Simulate;

class PaymentsController extends Controller
{
    //
    public function index()
    {
        return view('payment/payment');
    }

    public function payWithMpesa(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required',
        ]);

        if (!$validator->fails()) {
            $response = STK::request(1)
                ->from($request['number'])
                ->usingReference('Import Performance Parts', 'Parts payment')
                ->push();
            if ($response) {
                return redirect()->back()->with('ok', 'The payment request was successfully received');
            } else {
                return redirect()->back()
                    ->withErrors(['details' => 'Unable to process payment for now please try again later']);
            }
        } else {
            return redirect()->back()
                ->withErrors(['details' => 'Missing details. Unable to add to start payment. Check your phonenumber']);
        }
    }

    public function cart(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'image' => 'required',
            'name' => 'required',
            'price' => 'required'
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors(['details' => 'Missing details. Unable to add to cart']);
        } else {

            if (!session()->exists('cart')) {
                session()
                    ->put('cart', array(
                        array(
                            'image' => $request['image'],
                            'name' => $request['name'],
                            'price' => $request['price']
                        )
                    ));
            } else {



                session()->push('cart',  array(
                    'image' => $request['image'],
                    'name' => $request['name'],
                    'price' => $request['price']
                ));
            }
            return redirect()->back()->with('added', 'Item added to cart');
        }
    }

    public function checkout()
    {
        $total = 0;
        foreach ((array) Session::get('cart') as $key => $value) {
            $total += $value['price'];
        }

        Log::info('Logging total');
        Log::info($total);
        return redirect('/payment/index')->with('cart', Session::get('cart'))
            ->with('total', $total);
    }

    public function payWithCard(Request $request)
    {
        Stripe::setApiKey('sk_test_51GyAEqIwxY8vQRb9Dc34vbuZq8Vy4ohQg8As3XGeNpW6CXkKCLkN7GNqWelL8P3OPiWAt7IqaF1b0x4rm8RUyhaO00B94wVRR9');
        Charge::create([
            "amount" => 10 * 10,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment"
        ]);

        return redirect()->back()->with('ok', 'The payment request was successfully received');
    }
}
