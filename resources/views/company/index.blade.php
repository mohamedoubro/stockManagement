@extends('layouts.app')

@section('content')
        <h4>Company informations :</h4>
        @if(count($companies)==0)
            <a href="/company/create" class="btn btn-primary float-right">New Company </a>
            <br>
            <br>
        @endif
        <table class="table table-bordered border-muted table-hover table-striped text-center">
                <tr>
                    <th>Name :</th>
                    <th>Specialty :</th>
                    <th>Phone :</th>    
                    <th>Email :</th>
                    <th>City :</th>
                    <th>Action :</th>
                </tr>
                @if(count($companies))
                @foreach($companies as $company)
                <tr>
                    <form action="{{url('company/'.$company->id)}}" method="post">
                        <td>{{$company->name}} <br> <h6>{{$company->user->name}}</h6> </td>
                        <td>{{$company->specialty}}</td>
                        <td>{{$company->phone}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->city}}</td>
                        <td>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                            <a href="{{url('company/'.$company->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{url('company/'.$company->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </td>
                        
                    </form>
                </tr>
                @endforeach
                @else
                <tr class="text-center">
                    <td colspan="7">No Companies !</td>
                @endif
                </tr>
        </table>
@endsection