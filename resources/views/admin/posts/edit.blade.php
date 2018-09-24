@extends('layouts.app') @section('content') @include('admin.includes.errors')


<div class="panel panel-default">
    <div class="panel-heading">CUpdate post</div>

    <div class="panel-body">
        <form method="post" action="{{route('post.update',['id'=>$post->id])}}" enctype="multipart/form-data">

            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value={{ $post->title }}>
            </div>

            <div class="form-group">
                <label for="featured">Featured</label>
                <input type="file" class="form-control" name="featured" id="featured">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" name="content" id="content" rows="5" cols="5">
                    {{ $post->content }}
                </textarea>
            </div>


            <div class="form-group">

                <label for="categories">Categories</label>

                <select name="category_id" id="categories" class="form-control">

                    @foreach($categories as $category)



                    <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected="selected"' : '' }}> {{ $category->name }}</option>



                    @endforeach

                </select>

             
            <div class="form-group">

                <label for="tags">Select Tags: @foreach($tags as $tag)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" class="form-check-input" name="tags[]" value="{{ $tag->id}}"  
                                @foreach($post->tags as $t ) 
                            
                                   @if($tag->id == $t->id)
                            
                                   checked
                                   @endif
                            
                                   @endforeach
                                   
                                   >{{ $tag->tag}}</label>
                    </div>
                    @endforeach
                </label>
            </div>

            </div>

            <div class="form-group">
                <div class="text-center">

                    <button class="btn btn-success" type="success">Update post</button>
                </div>

            </div>


        </form>
    </div>

    @stop
