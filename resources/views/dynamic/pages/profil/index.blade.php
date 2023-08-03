@extends('adminlte::page')

@section('title', 'profil')



@section('content')
@section('plugins.Datatables', true)
    <p>Halaman Profil</p>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="{{url('create')}}" class="btn btn-primary my-4">+ Create</a>
    <table id="datatables" class="table table-striped table-bordered" style="width:100%">
    <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Email</th>
                <th>Age</th>
             
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                
                <td>
                <a href="{{url('edit')}}" class="btn btn-primary"><i>edit</i></a>
                <a href="" class="btn btn-danger"><i>Delete</i></a>

                </td>
            </tr>

        </table>
        <script>
      $(document).ready( function ()
        {
          $('#example').DataTable();
        } );
    </script>
    </body>
    </html>
   
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop