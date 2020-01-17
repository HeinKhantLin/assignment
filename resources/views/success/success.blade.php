@extends('layouts.main')

@section('content')
    <success-page 
    order_id='{{ $transaction_id }}'
    total_cost='{{ $total_cost }}'
    product_url='{{ route("product.index") }}'
    order_date='{{ $order_date }}'
    >
    @foreach($transaction_details as $detail)
    <purchase-item
    product_name="{{ $detail->product->name }}"
    price="{{ $detail->cost }}"
    qty="{{ $detail->qty }}"
    >
    </purchase-item>   
    @endforeach
    </success-page>   
@endsection