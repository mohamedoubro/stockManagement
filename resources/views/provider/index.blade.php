@extends('layouts.app')

@section('content')
        <h4 >Lists of Providers :</h4>
        <a href="provider/create" class="btn btn-primary float-right">New Provider</a>
        <br>
        <br>
        <table class="table table-bordered border-muted table-hover table-striped text-center">
                <tr>
                    <th>Full Name :</th>
                    <th>Phone :</th>
                    <th>E-mail :</th>
                    <th>City :</th>
                    <th>Action :</th>
                </tr>
            @if(count($providers))
            @foreach($providers as $provider)
                <tr>
                    <td>{{$provider->fullName}} <br><h6>{{$provider->user->name}}</h6></td>
                    <td>{{$provider->phone}}</td>
                    <td>{{$provider->email}}</td>
                    <td>{{$provider->city}}</td>
                    <td>
                        <form action="{{url('provider/'.$provider->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <a href="{{url('provider/'.$provider->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{url('provider/'.$provider->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
            <tr class="text-center">
                <td colspan="8">No Providers !</td>
            </tr>
            @endif
        </table>
@endsection 