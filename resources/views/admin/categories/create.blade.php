@extends('layouts.app')




@section('content')


 @include('admin.includes.errors')
    
    
    


<div class="panel panel-default">
                <div class="panel-heading"><h4>Create new category</h4></div>
               
                <div class="panel-body">
                   <form method="post" action="{{route('category.store')}}">
                       
                       {{csrf_field()}}
                    
                       
                        <div class="form-group"> 
                       <label for="name">Name</label>  
                            <input type="text" class="form-control" name="name" id="name"> 
                       </div>
                       
                        <div class="form-group">
                            <div class="text-center">
                            
                                <button class="btn btn-success" type="success">Store category</button>
                            </div>
                
                       </div>
                    
                    
                    </form>
                </div>

@stop