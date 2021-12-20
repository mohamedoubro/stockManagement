@extends('layouts.app')

@section('content')
                    <div class="row">
                    <h4 class="col-md-4">Product Details :</h4>
                    <div class="col-md" >
                    <div class="row">
                        <img class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 rounded-circle" src="{{asset($product->image)}}" alt="Image" width="" height="150px">
                    </div> 
                    <div class="row pt-4">
                        <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">Product :</p>
                        <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">{{$product->name}}</p>
                    </div> 
                    <div class="row">
                        <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">Category :</p>
                        <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 ">{{$category->name}}</p>
                    </div> 
                    <div class="row">
                        <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">Buy Price :</p>
                        <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 ">{{$product->buyPrice}}</p>
                    </div>
                    <div class="row">
                        <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">Sell Price :</p>
                        <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 ">{{$product->sellPrice}}</p>
                    </div> 
                    <div class="row">
                        <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">Quantity :</p>
                        <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3 ">{{$product->quantity}}</p>
                    </div>  
                    </div>
                </div>
@endsection