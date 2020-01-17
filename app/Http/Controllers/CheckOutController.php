<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionDetail;
use App\Cart;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = auth()->user();
        $current_cart = $customer->active_cart;

        $cart_id        = $current_cart->id;
        $customer_id    = $customer->id;
        $total_price    = $current_cart->cart_total_price;
        
        $cart = Cart::find($cart_id);
        $cart->completed_at = date('Y-m-d H:i:s');
        $cart->update();
        
        $trans = new Transaction();
        $trans->cart_id         = $cart_id;
        $trans->customer_id     = $customer_id;
        $trans->total_cost      = $total_price;
        $trans->save();
        
        foreach($current_cart->items as $item){
            $trans_detail = new TransactionDetail();
            $trans_detail->transaction_id = $trans->id;
            $trans_detail->product_id = $item->product_id;
            $trans_detail->qty = $item->qty;
            $trans_detail->cost = $item->product->price;
            $trans_detail->save();
        }

        return redirect('/success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
