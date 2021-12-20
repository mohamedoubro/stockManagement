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
        <h4 class="col-md-4">Update your Sell :</h4>
            <form class="col-md" action="{{url('sell/'.$sell->id)}}" method="post">
                <div class="form-group row">
                    <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-label-right">Provider :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                        <select class="form-control @error('provider') is-invalid @enderror" type="text" name="provider" id="provider">
                            <option value="{{$provider->fullName}}">{{$provider->fullName}}</option>
                            @foreach($providers as $prov)
                            @if($prov->fullName!=$provider->fullName)
                            <option value="{{$prov->name}}">{{$prov->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-label-right">Product :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                        <select class="form-control @error('product') is-invalid @enderror" type="text" name="product" id="product">
                            <option value="{{$product->name}}">{{$product->name}}</option>
                            @foreach($products as $prod)
                            @if($prod->name!=$product->name)
                            <option value="{{$product->name}}">{{$prod->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-label-right">Sell Date :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                        <input type="date" name="sellDate" id="sellDate" class="form-control @error('sellDate') is-invalid @enderror" value="{{$sell->sellDate}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 form-label-right">Quantity :</label>
                    <div class="col-9 col-sm-9 col-md-8 col-lg-8">
                        <input type="text" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{$sell->quantity}}">
                    </div>
                </div>
                <div class="form-group form-group col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 text-right">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <input type="submit" class="btn btn-primary" value="Update">
                </div>
            </form>
    </div>

@endsection