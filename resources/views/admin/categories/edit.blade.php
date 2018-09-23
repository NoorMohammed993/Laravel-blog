@extends('layouts.app')




@section('content')


 @include('admin.includes.errors')
    
    
    


<div class="panel panel-default">
                <div class="panel-heading">Update category</div>
               
                <div class="panel-body">
                   <form method="post" action="{{route('category.update',['id'=>$category->id])}}">
                       
                       {{csrf_field()}}
                    
                       
                        <div class="form-group"> 
                       <label for="name">Name</label>  
                            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}"> 
                       </div>
                       
                        <div class="form-group">
                            <div class="text-center">
                            
                                <button class="btn btn-success" type="success">Update category</button>
                            </div>
                
                       </div>
                    
                    
                    </form>
                </div>

@stop