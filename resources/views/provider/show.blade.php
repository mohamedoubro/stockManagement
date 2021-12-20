@extends('layouts.app')

@section('content')
    <div class="row">
        <h4 class="col-md-4">Provider details :</h4>
        <div class="col-md">
            <div class="row">
                <p class="col-md-2">Full Name :</p>
                <p class="col">{{$provider->fullName}}</p>
            </div> 
            <div class="row">
                <p class="col-md-2">Birth Date :</p>
                <p class="col">{{$provider->dateOfBirth}}</p>
            </div> 
            <div class="row">
                <p class="col-md-2">Phone :</p>
                <p class="col">{{$provider->phone}}</p>
            </div> 
            <div class="row">
                <p class="col-md-2">Email :</p>
                <p class="col">{{$provider->email}}</p>
            </div> 
            <div class="row">
                <p class="col-md-2">Adress :</p>
                <p class="col">{{$provider->adress}}</p>
            </div> 
            <div class="row">
                <p class="col-md-2">City :</p>
                <p class="col">{{$provider->city}}</p>
            </div>
        </div>
    </div>
@endsection