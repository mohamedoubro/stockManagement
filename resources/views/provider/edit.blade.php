@extends('layouts.app')

@section('content')
    @if(count($errors)!=null)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </div>
    @endif
    <div class="row">
        <h4 class="col-md-4">Update your  Provider :</h4>
            <form class="col-md" action="{{url('provider/'.$provider->id)}}" method="post">
                <div class="form-group row">
                    <label class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" for="">Full Name :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                        <input type="text" name="fullName" id="fullName" class="form-control @error('fullName') is-invalid @enderror " value="{{$provider->fullName}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" for="">Brith Date :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                        <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control @error('dateOfBirth') is-invalid @enderror " value="{{$provider->dateOfBirth}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" for="">Phone :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                        <input type="phone" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror " value="{{$provider->phone}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" for="">E-mail :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{$provider->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" for="">Adress :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                        <input type="text" name="adress" id="adress" class="form-control @error('adress') is-invalid @enderror" value="{{$provider->adress}}">
                    </div>
                </div><div class="form-group row">
                    <label class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" for="">City :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                        <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror " value="{{$provider->city}}">
                    </div>
                </div>
                <div class="form-group form-group col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 text-right">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
    </div>
@endsection