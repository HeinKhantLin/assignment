@extends('layouts.main')

@section('content')
    <div class="col-12">
    @foreach($tags as $id => $tag)
    <a href="/tag/{{$id}}" class="btn btn-primary"> {{$tag}} </a>
    @endforeach
    </div>
    @foreach($products as $product)
        <product-list-item 
            image_url="{{$product->image_url}}" 
            detail_url="{{route('product.show',$product->id)}}">
                <template slot="name">{{$product->name}}</template>
                <template slot="description">{{$product->description}}</template>
        </product-list-item>                    
    @endforeach

@endsection