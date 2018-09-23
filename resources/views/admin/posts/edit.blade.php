@extends('layouts.app') 


@section('content') 



@include('admin.includes.errors')


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
                    {{  $post->content }}
                </textarea>
            </div>


            <div class="form-group">

                <label for="categories">Categories</label>

                <select name="category_id" id="categories" class="form-control">

                    @foreach($categories as $category)


                    <option value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <div class="text-center">

                    <button class="btn btn-success" type="success">Update post</button>
                </div>

            </div>


        </form>
    </div>

    @stop
