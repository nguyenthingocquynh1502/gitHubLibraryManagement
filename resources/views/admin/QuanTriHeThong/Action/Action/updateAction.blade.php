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
		<form action="/action/update/{{$action->id}}" method="POST" >
			<table>
				<input type=hidden value="{{csrf_token()}}" name="_token" >
				<div class="card-body card-block">
        			<div class="has-success form-group">
						<label for="inputIsValid" class=" form-control-label">
							Tên Hành Động:
						</label>
							<input type="text" class="is-valid form-control-success form-control" value="{{$action->tenac}}" name="tenac">
					</div>
					
						<label>Tên Controller:</label>
							<select data-placeholder="lựa chọn controller..." class="standardSelect" name="controllerid" tabindex="1">
								<option value=""></option>
								@foreach($controller as $value)
								<option value="{{$value->id}}">{{$value->ten}}</option>
								@endforeach
							</select>
    				
					<div class="has-success form-group">
						<label for="inputIsValid" class=" form-control-label">
							Kích Hoạt:
						</label>
							<input type="text" class="is-valid form-control-success form-control" value="{{$action->kichhoat}}" name="kichhoat">
					</div> 
					<div class="has-success form-group">
						<label for="inputIsValid" class=" form-control-label">
							Công Cộng:
						</label>
							<input type="text" class="is-valid form-control-success form-control" value="{{$action->congcong}}" name="congcong">
					</div>            
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