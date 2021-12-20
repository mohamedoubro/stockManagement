@extends('layouts.app')

@section('content')
        <div class="row">
        <h4 class="col-md-4">Company details :</h4>
        @if($company)
        <div class="col-md">
        <div class="row">
                <img class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4 rounded-circle" src="{{asset($company->image)}}" alt="Image" width="" height="150px">
            </div> 
            <div class="row pt-4">
                <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">Name :</p>
                <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">{{$company->name}}</p>
            </div>
            <div class="row">
                <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">Speciaity :</p>
                <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">{{$company->specialty}}</p>
            </div>
            <div class="row">
                <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">About us :</p>
                <p class="col-6 col-sm-6 col-md-4 col-lg-6 col-xl-6">{{$company->content}}</p>
            </div>
            <div class="row">
                <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">Created date :</p>
                <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">{{$company->dateOfBirth}}</p>
            </div>
            <div class="row">
                <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">Phone :</p>
                <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">{{$company->phone}}</p>
            </div>
            <div class="row">
                <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">Email :</p>
                <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">{{$company->email}}</p>
            </div>  
            <div class="row">
                <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">Adress :</p>
                <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">{{$company->adress}}</p>
            </div>  
            <div class="row">
                <p class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3">City :</p>
                <p class="col-5 col-sm-5 col-md-3 col-lg-3 col-xl-3">{{$company->city}}</p>
            </div>      
            @endif
            </div> 
        </div>
@endsection