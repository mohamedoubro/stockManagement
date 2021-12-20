@extends('layouts.app')

@section('content')
    <div class="row">
        <h4 class="col-md-4">Command Details</h4>
        <div class="col-md">
            <div class="row">
                <p class="col-md-2">Product :</p>
                <p class="col">{{$product->name}}</p>
            </div>
            <div class="row">
                <p class="col-md-2">Date :</p>
                <p class="col">{{$command->commandDate}}</p>
            </div>
            <div class="row">
                <p class="col-md-2">Quantity :</p>
                <p class="col">{{$command->quantity}}</p>
            </div>
        </div>
    </div>
@endsection