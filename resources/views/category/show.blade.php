@extends('layouts.app')

@section('content')
    <div class="row">
        <h4 class="col-md-4">Ctagory details :</h4>
        <div class="col-md">
            <div class="row">
                <p class="col-md-2">Name :</p>
                <p class="col">{{$category->name}}</p>
            </div>
        </div>
    </div>
@endsection