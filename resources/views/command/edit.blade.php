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
        <h4 class="col-md-4">Update your Command :</h4>
        <form class="col-md" action="{{url('command/'.$command->id)}}" method="post">
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Product :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
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
            <div class="form-group row ">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-from-right ">Command Date :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input type="date" class="form-control @error('commandDate') is-invalid @enderror" name="commandDate" id="commandDate" value="{{$command->commandDate}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Quantity :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input class="form-control @error('quantity') is-invalid @enderror" type="text" name="quantity" id="quantity" value="{{$command->quantity}}">
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