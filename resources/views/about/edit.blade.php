@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create</div>

                <div class="card-body">
                   @if(session('sukses'))
		                <div class="alert alert-success" role="alert">
		                    {{session('sukses')}}
		                </div>
           			 @endif

                    <div class="panel-body">
                <div class="col-lg-12">
                        <form method="post" action="{{route('status.update', $pic->id)}}" autocomplete="off" class="form-horizontal">
                        	<div class="text-center">
                                <h4>Edit</h4>
                            </div>
                             {{csrf_field()}}
                               @method('put')
                             
                            <div class="form-group">
                                <label for="image">Upload Image : </label>
                                <img src="{{asset('images/'.$pic->image)}}" alt="" width="100px" height="auto" style = "margin : 10px 0 10px 0 ">
                            <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status">Tittle : </label>
                                <textarea name="tittle" id="editor" class="form-control" placeholder="Input .." >{{ old('tittle') }}</textarea>
                                @if($errors->has('content'))
                                    <strong class="text-danger"> {{$errors->first('tittle')}} </strong>
                                @endif
                            </div>
                            <button class="btn btn-success" type="submit">Save</button>

                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection