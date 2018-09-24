@extends('layouts.app')




@section('content')


 @include('admin.includes.errors')
    
    
    


<div class="panel panel-default">
                <div class="panel-heading"><h4>Edit Tags  " {{ $tag->tag }} "</h4></div>
               
                <div class="panel-body">
                   <form method="post" action="{{route('tag.update',['id' =>$tag->id ])}}">
                       
                       {{csrf_field()}}
                    
                       
                        <div class="form-group"> 
                       <label for="tag">tag</label>  
                            <input type="text" class="form-control" name="tag" id="tag" value="{{ $tag->tag }}"> 
                       </div>
                       
                        <div class="form-group">
                            <div class="text-center">
                            
                                <button class="btn btn-success" type="success">update tag</button>
                            </div>
                
                       </div>
                    
                    
                    </form>
                </div>

@stop