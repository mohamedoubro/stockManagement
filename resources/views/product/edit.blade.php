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
        <h4 class="col-md-4">Update product :</h4>
        <form class="col-md" action="{{url('product/'.$product->id)}}" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right" >Name :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{$product->name}}" >
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Image :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control" type="file" name="image" >
                </div>
            </div>
            <div class="form-group row ">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-from-right" > Category :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <select class="form-control @error('category') is-invalid @enderror" type="text" name="category" id="category" >
                        <option value="{{$category->name}}">{{$category->name}}</option>
                        @foreach($listCategory as $categ)
                            @if($categ->name!=$category->name)
                            <option value="{{$categ->name}}">{{$categ->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Sell Price :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('sellPrice') is-invalid @enderror" type="text" name="sellPrice" id="sellPrice" value="{{$product->sellPrice}}" >
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Buy price :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('buyPrice') is-invalid @enderror" type="text" name="buyPrice" id="buyPrice" value="{{$product->buyPrice}}" >
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right ">Quantity :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('quantity') is-invalid @enderror" type="text" name="quantity" id="quantity" value="{{$product->quantity}}" >
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