@extends('layouts.app')

@section('content')
    @if(count($errors))
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </div>
    @endif
    <div class="row">
        <h4 class="col-md-4">Add new company :</h4>
        <form class="col-md" action="/company" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Name :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Image :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image">
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  col-from-right ">Speciality :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('specialty') is-invalid @enderror" type="text" name="specialty" id="specialty">
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  col-from-right ">Created date :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('dateOfBirth') is-invalid @enderror" type="date" name="dateOfBirth" id="dateOfBirth">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  col-form-right">About us :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('content') is-invalid @enderror" type="text" name="content" id="content">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  col-form-right">Phone :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" id="phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  col-form-right ">Email :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email">
                </div>
            </div> 
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  col-form-right ">Adress :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('adress') is-invalid @enderror" type="text" name="adress" id="adress">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-right ">City :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" id="city">
                </div>
            </div>
            <div class="form-group col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 text-right">
                {{csrf_field()}}
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-primary" type="reset" value="Reset">
            </div>
        </form>
    </div>
@endsection