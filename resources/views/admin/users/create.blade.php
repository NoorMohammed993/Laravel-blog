@extends('layouts.app') @section('content') @include('admin.includes.errors')





<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Create new User</h4></div>

    <div class="panel-body">
        <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">

            {{csrf_field()}}


            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="tag">
            </div>

            <div class="form-group">

                <label for="admin">Permission</label>
                <select name="admin" id="admin" class="form-control">


                    <option value="0">User</option>
                    <option value="1">Admin</option>

                </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>




            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control" name="avatar" id="avatar">
            </div>

            
            
            <div class="form-group">
                <label for="about">About</label>
                <input type="text" class="form-control" name="about" id="about">
            </div>

            <div class="form-group">
                <label for="facebook">Facebook</label>
                <input type="url" class="form-control" name="facebook" id="facebook">
            </div>

            <div class="form-group">
                <label for="url">Youtube</label>
                <input type="youtube" class="form-control" name="youtube" id="youtube">
            </div>

            <div class="form-group">
                <div class="text-center">

                    <button class="btn btn-success" type="success">Add User</button>
                </div>

            </div>


        </form>
    </div>

    @stop
