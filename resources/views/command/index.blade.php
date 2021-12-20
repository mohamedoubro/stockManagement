@extends('layouts.app')

@section('content')
        <h4>Lists of Commands :</h4>
        @if(count($products))
            <a href="/command/create" class="btn btn-primary float-right">New Product</a> 
            <br>
            <br>
        @else
            <div class="alert alert-primary">
                <li>Add at least one product in section Products !</li>
            </div>   
        @endif
        <table class="table table-bordered border-muted table-hover table-striped text-center">
                <tr>
                    <th>Product :</th>
                    <th>Command Date :</th>
                    <th>Quantity :</th>
                    <th>Action :</th>
                </tr>
                @if(count($commands))
                @foreach($commands as $command)
                <tr>
                    <form action="{{url('command/'.$command->id)}}" method="post">
                        <td>
                            @foreach($products as $product)
                                @if($product->id==$command->product_id)
                                    {{$product->name}} <br> <h6> {{$command->user->name}}</h6>
                                @endif
                            @endforeach
                        </td>
                        <td>{{$command->commandDate}}</td>
                        <td>{{$command->quantity}}</td>
                        <td>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                            <a href="{{url('command/'.$command->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{url('command/'.$command->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <button type="submit" value="Delete" class="btn btn-primary">Delete</button>
                        </td>
                        
                    </form>
                </tr>
                @endforeach
                @else
                <tr class="text-center">
                    <td colspan="7">No Commands !</td>
                @endif
                </tr>
        </table>
@endsection