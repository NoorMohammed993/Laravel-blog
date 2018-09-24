@extends('layouts.app') @section('content')







<div class="panel panel-default">
    
    
    <div class="panel-heading">
    <h4>Users</h4>
    
    </div>
    <div class="panel-body">
        
        
        <table class="table table-hover">

            <thead>

                <th>Avatar</th>
                <th>Name</th>
                <th>Permission</th>
                
                <th>Delete</th>
            </thead>

            <tbody>
                @if($users->count()>0)
                
                @foreach($users as $user)
                <tr>
                    
                    <td> <img src="{{ asset($user->profile->avatar) }}" width="90px" height="50px" style="border-radius:50%"></td>
                    
                     <td>{{$user->name}}</td>
                     <td>Permission</td>
                    <td><a href="{{route('user.delete',['id'=>$user->id])}}" class="btn btn-danger btn-xs">Delete
                        </a></td>

                </tr>
                @endforeach
                
                @else
                
                 <tr>
                
                <th colspan="5" class="text-center"> No Users </th>
                </tr>
                
                @endif

            </tbody>

        </table>
    </div>
</div>



@stop
