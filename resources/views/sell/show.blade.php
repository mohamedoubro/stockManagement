@extends('layouts.app')

@section('content')

    <div class="row">
        <h4 class="col-md-4">Sell details :</h4>
        <div class="col-md">
            <div class="row">
                <p class="col-md-2">Provider :</p>
                <p class="col">{{$provider->fullName}}</p>
            </div> 
            <div class="row">
                <p class="col-md-2">Product :</p>
                <p class="col">{{$product->name}}</p>
            </div> 
            <div class="row">
                <p class="col-md-2">Sell Date :</p>
                <p class="col">{{$sell->sellDate}}</p>
            </div> 
            <div class="row">
                <p class="col-md-2">Quantity :</p>
                <p class="col">{{$sell->quantity}}</p>
            </div> 
        </div>
    </div>

@endsection