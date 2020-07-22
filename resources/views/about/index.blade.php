@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Text Tentang</div>
                 <div class="right">
                            <a href="{{route('status.create')}}" class="btn-primary btn-sm">Tambahkan Data Konten</a>
                        </div>
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
                                <th>Image</th>
                                <th>Tittle</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($pic as $row)
                    <tr>
                        <td>{{$no++}}</td>
                        <td><img src="{{asset('images/'.$row->image)}}" alt="no photo" width="100px"></td>
                         <td>{{$row->tittle}}</td>
                        <td>
                            <!-- <a href="{{route('status.edit', $row->id)}}" class ="btn btn-warning btn-sm">Edit</a> -->
                            <a href="/status/{{$row->id}}/delete" class ="btn btn-danger btn-sm " onclick ="return confirm('Yakin data ini mau dihapus ?')">Delete</a>
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