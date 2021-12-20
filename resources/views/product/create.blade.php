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
        <h4 class="col-md-4">Add new Product :</h4>
        <form class="col-md" action="/product" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Name :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Image :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('image') is-invalid @enderror" type="file"  name="image"  >
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-from-right "> Category :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <select class="form-control @error('category') is-invalid @enderror" type="text" name="category" value="{{old('category')}}">
                        <option value="">Choice a category :</option>
                        @foreach($category as $categ)
                        <option value="{{$categ->name}}">{{$categ->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Sell Price :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('sellPrice') is-invalid @enderror" type="text" name="sellPrice" value="{{old('sellPrice')}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Buy price :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('buyPrice') is-invalid @enderror" type="text" name="buyPrice" value="{{old('buyPrice')}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right ">Quantity :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('quantity') is-invalid @enderror" type="text" name="quantity" value="{{old('quantity')}}">
                </div>
            </div> 
            <div class="form-group form-group col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 text-right">
                {{csrf_field()}}
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-primary" type="reset" value="Reset">
            </div>
        </form>
    </div>
@endsection