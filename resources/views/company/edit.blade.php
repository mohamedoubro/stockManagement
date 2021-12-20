@extends('layouts.app')

@section('content')
    @if(count($errors)!=0)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </div>
    @endif
    <div class="row">
        <h4 class="col-md-4">Update company :</h4>
        <form class="col-md" action="{{url('company/'.$company->id)}}" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Name :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{$company->name}}" >
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Image :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-from-right ">Speciality :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="text" name="specialty" id="specialty" value="{{$company->specialty}}">
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-from-right ">Creatd date :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="date" name="dateOfBirth" id="dateOfBirth" value="{{$company->dateOfBirth}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">About us :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('content') is-invalid @enderror" type="text" name="content" id="content" value="{{$company->content}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Phone :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone" value="{{$company->phone}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right ">Email :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email"  value="{{$company->email}}">
                </div>
            </div> 
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right ">Adress :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('adress') is-invalid @enderror" type="text" name="adress" id="adress" value="{{$company->adress}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right ">City :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" id="city" value="{{$company->city}}">
                </div>
            </div>
            <div class="form-group form-group col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 text-right">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input class="btn btn-primary" type="submit" value="Update">
            </div>
        </form>
    </div>
@endsection