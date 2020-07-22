@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                 <!-- <div class="right">
                            <a href="{{route('home.create')}}" class="btn-primary btn-sm">Tambahkan Data Konten</a>
                        </div> -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($status as $row)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$row->text}}</td>
                        <td>
                            <a href="{{route('home.edit', $row->id)}}" class ="btn btn-warning btn-sm">Edit</a>
                           <!--  <a href="/home/{{$row->id}}/delete" class ="btn btn-danger btn-sm " onclick ="return confirm('Yakin data ini mau dihapus ?')">Delete</a> -->
                        </td>
                    </tr>
                    @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
