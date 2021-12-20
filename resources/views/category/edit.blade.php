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
        <h4 class="col-md-4">Update Category :</h4>
        <form class="col-md" action="{{url('category/'.$category->id)}}" method="post">
            <div class="form-group row">
                <label for="" class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-form-label col-form-right">Name :</label>
                <div class="col-9 col-sm-9 col-md-8 col-lg-8 col-xl-8">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{$category->name}}">
                </div>
            </div>
            <div class="form-group form-group col-12 col-sm-12 col-md-11 col-lg-11 col-xl-11 text-right">
                {{csrf_field()}}
                {{ method_field('PUT')}}
                <input type="submit" class="btn btn-primary float-right" value="Update">
            </div>
        </form>
    </div>
@endsection