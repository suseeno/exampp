@extends('adminlte::page')

@section('title', 'Create')

@section('content')
       <!DOCTYPE html>
       <html lang="en">
       <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
       </head>
       <body>
            <a href="{{url('index')}}" class="btn btn-success my-3"> back</a>
       <form>

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" width="30">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">age</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Position</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">

            <label for="cars">Status:</label>
                <select name="cars" id="cars" form="carform">
                <option value="publish">Publish</option>
                <option value="unpublish">Unpublish</option>
               
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="riset" class="btn btn-danger">Reset</button>

            </form>
       </body>
       </html>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop