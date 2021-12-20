@extends('layouts.app')

@section('content')
        <h4>Lists of Sells :</h4>
        @if(count($products) && count($providers))
            <a href="/sell/create" class="btn btn-primary float-right">New Product</a> 
            <br>
            <br>
        @else
            <div class="alert alert-primary">
                <li>Add at least one provider in section Providers !</li>
                <li>Add at least one product in section Products !</li>
            </div>   
        @endif
            <table class="table table-bordered border-muted table-hover table-striped text-center">
                    <tr>
                        <th>Provider :</th>
                        <th>Product :</th>
                        <th>Sell Date :</th>
                        <th>Quantity :</th>
                        <th>Action :</th>
                    </tr>
                @if(count($sells))
                @foreach($sells as $sell)
                <tr>
                        <td>
                            @foreach($providers as $provider)
                                @if($provider->id==$sell->provider_id)
                                    {{$provider->fullName}} <br><h6>{{$sell->user->name}}</h6>
                                @endif
                            @endforeach
                        </td>
                        <td>
                             @foreach($products as $product)
                                @if($product->id==$sell->product_id)
                                    {{$product->name}}
                                @endif
                            @endforeach
                        </td>
                        <td>{{$sell->sellDate}}</td>
                        <td>{{$sell->quantity}}</td>
                        <td>
                            <form action="{{url('sell/'.$sell->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <a href="{{url('sell/'.$sell->id)}}" class="btn btn-primary">Show</a>
                                <a href="{{url('sell/'.$sell->id.'/edit')}}" class="btn btn-primary">Edit</a>
                                <button class="btn btn-primary" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @else
                <tr class="text-center">
                    <td colspan="6">No Sells !</td>
                </tr>
                @endif
            </table>
@endsection