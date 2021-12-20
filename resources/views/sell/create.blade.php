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
        <h4 class="col-md-4">Add new Sell :</h4>
            <form class="col-md" action="/sell" method="post">
                <div class="form-group row">
                    <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-label-right">Provider :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                        <select class="form-control @error('provider') is-invalid @enderror" type="text" name="provider" id="provider">
                            <option value="">Choice a Provider :</option>
                            @foreach($providers as $provider)
                            <option value="{{$provider->fullName}}">{{$provider->fullName}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-label-right">Product :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                        <select class="form-control @error('product') is-invalid @enderror" type="text" name="product" id="product">
                            <option value="">Choice a Product :</option>
                            @foreach($products as $product)
                            <option value="{{$product->name}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-label-right">Sell Date :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                        <input type="date" name="sellDate" id="sellDate" class="form-control @error('sellDate') is-invalid @enderror" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-label-right">Quantity :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                        <input type="text" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror">
                    </div>
                </div>
                <div class="form-group form-group col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 text-right">
                    {{csrf_field()}}
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="reset" class="btn btn-primary" value="Reset">
                </div>
            </form>
    </div>
@endsection