@extends('layouts.app')

@section('content')
        <h4>Lists of Categories :</h4>  
        <a href="category/create" class="btn btn-primary float-right">New Category</a>
        <br>
        <br>
        
        <table class="table table-bordered border-muted table-hover table-striped text-center">
                <tr>
                    <th>Name : </th>
                    <th>Action :</th>
                </tr>
                @if(count($categories))
                @foreach($categories as $category)
                <tr>                
                    <form action="{{url('category/'.$category->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                        <td>{{$category->name}} <br> <h6>{{$category->user->name}}</h6></td>
                        <td>
                            <a href="{{url('category/'.$category->id)}}" class="btn btn-primary">Show</a>
                            <a href="{{url('category/'.$category->id.'/edit')}}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-primary">Delete</button>
                        </td>
                    </form>
                </tr>
                @endforeach 
                @else 
                <tr><td colspan="3">No Categories !</td></tr>
                @endif
            </table>
@endsection