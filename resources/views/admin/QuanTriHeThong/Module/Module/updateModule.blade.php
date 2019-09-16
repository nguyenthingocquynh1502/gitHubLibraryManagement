@extends('admin.layouts.master')
@section('title','basicForm')
@section('header','Basic-Forms')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Update</a></li>
    <li class="active">Update</li>
@endsection
@section('content')
	<div class="content mt-3">
		<form action="/module/update/{{$qlmodules->id}}" method="POST" >
			<table>
				<input type=hidden value="{{csrf_token()}}" name="_token" >
				<div class="card-body card-block">
        			<div class="has-success form-group"><label for="inputIsValid" class=" form-control-label">Tên Module:</label><input type="text" class="is-valid form-control-success form-control" value="{{$qlmodules->ten}}" name="ten"></div>          
    			</div>
				<div class="card-body card-block">
        			<div class="has-success form-group"><label for="inputIsValid" class=" form-control-label">Kích Hoạt:</label><input type="text" class="is-valid form-control-success form-control" value="{{$qlmodules->kichhoat}}" name="kichhoat"></div>          
    			</div>
			</table>
		<div class="card-body">
            <button type="submit" class="btn btn-success btn-lg btn-block">
				Save
			</button>
        </div>
		</form>
	</div>
	
@endsection