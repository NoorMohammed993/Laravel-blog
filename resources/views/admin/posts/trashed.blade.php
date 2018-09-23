@extends('layouts.app') @section('content')







<div class="panel panel-default">
    
     <div class="panel-heading">
    <h4>Trashed Post</h4>
    
    </div>
    <div class="panel-body">
        <table class="table table-hover">

            <thead>

                <th>Image</th>
                <th>Title</th>
                <th>Restore</th>
                <th>Delete</th>
            </thead>

            <tbody>
                
                
                @if($posts->count()>0)

                @foreach($posts as $post)
                <tr>

                    <td> <img src="{{ $post->featured }}" width="90px" height="50px"></td>
                    <td>{{ $post->title }}</td>
                    <td><a href="{{route('post.restore',['id'=>$post->id])}}" class="btn btn-success btn-xs">Rstore
                        
                        </a></td>

                    <td><a href="{{route('post.deleteTrashed',['id'=>$post->id])}}" class="btn btn-danger btn-xs">Delete
                        </a></td>

                </tr>
                @endforeach
                
                @else
                
                <tr>
                
                <th colspan="5" class="text-center"> no trashed posts to show</th>
                </tr>
                
                @endif

            </tbody>

        </table>
    </div>
</div>



@stop
