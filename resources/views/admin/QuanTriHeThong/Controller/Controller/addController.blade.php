@extends('admin.layouts.master')
@section('title','Create')
@section('header','Create')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">create</a></li>
    <li class="active">add</li>
@endsection
@section('content')
	<div class="content mt-3">
		<form action="add" method="POST" >
				<input type=hidden value="{{csrf_token()}}" name="_token" >
				<div class="card-body card-block">
        			<div class="has-success form-group"><label for="inputIsValid" class=" form-control-label">Tên Controller:</label><input type="text" class="is-valid form-control-success form-control" value="" name="ten"></div>          
    			</div>
				<div class="card-body card-block">
				<label>Tên Module:</label>
					<select data-placeholder="lựa chọn module..." class="standardSelect" name="id_module" tabindex="1">
                        <option value=""></option>
						@foreach($module as $value)
                        <option value="{{$value->id}}">{{$value->ten}}</option>
						@endforeach
                	</select>
    			</div>
				<div class="card-body card-block">
        			<div class="has-success form-group"><label for="inputIsValid" class=" form-control-label">Kích Hoạt:</label><input type="text" class="is-valid form-control-success form-control" value="" name="kichhoat"></div>          
    			</div>
		<div class="card-body">
            <button type="submit" class="btn btn-success btn-lg btn-block">
				Save
			</button>
			
        </div>
		</form>
	</div>
	
@endsection