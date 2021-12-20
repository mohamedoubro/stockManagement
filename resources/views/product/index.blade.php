@extends('layouts.app')

@section('content')
        <h4>Lists of products :</h4>
        @if(count($categories))
            <div class="">
                <a href="/product/create" class="btn btn-primary float-right">New Product</a> 
                <br>
                <br>
            </div>
        @else
            <div class="alert alert-primary">
                <li>Add at least one category in section Catgeory !</li>
            </div>   
        @endif
        <table class="table table-bordered border-muted table-hover table-striped text-center">
                <tr>
                    <th>Name :</th>
                    <th>Category :</th>
                    <th>Sell price :</th>
                    <th>Buy price :</th>
                    <th>Quantity :</th>
                    <th>Action :</td>
                </tr>
                @if(count($products))
                @foreach($products as $product)
                <tr>
                    <form action="{{url('product/'.$product->id)}}" method="post">
                        <td>{{$product->name}} <br><h6>{{$product->user->name}}</h6></td>
                        <td>
                            @foreach($categories as $category)
                                @if($category->id==$product->category_id)
                                    {{$category->name}}
                                @endif
                            @endforeach 
                        </td>
                        <td>{{$product->sellPrice}}</td>
                        <td>{{$product->buyPrice}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                            <a href="{{url('product/'.$product->id)}}" class="btn btn-primary ">Show</a>
                            <a href="{{url('product/'.$product->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <button type="submit" value="Delete" class="btn btn-primary ">Delete</button>
                        </td>
                        
                    </form>
                </tr>
                @endforeach
                @else
                <tr class="text-center">
                    <td colspan="7">No Products !</td>
                @endif
                </tr>
          
        </table>
@endsection