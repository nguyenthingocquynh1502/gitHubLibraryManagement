@extends('admin.layouts.master')
@section('title','Quản Lý Module')
@section('header','Danh Sách Module')
@section('link')
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Table</a></li>
    <li class="active">Data-tables</li>
@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                                <button type="button" class="btn btn-success" Style="float: right">
                                        <a style="color: #fff;" href="create">Thêm mới</a>
                                    </button>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên Hành Động</th>
                                            <th>Tên Controller</th>
                                            <th>Kích Hoạt</th>
                                            <th>Công Cộng</th>
                                            <th>Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i=1
                                        @endphp
                                        @foreach($qlaction as $m)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$m->tenac}}</td>
                                            <td>{{$m->controller['ten']}}</td>
                                            <td>{{$m->kichhoat}}</td>
                                            <td>{{$m->congcong}}</td>
                                            <td>
                                            <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hành động </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                                                        <a class="dropdown-item" href="del/{{$m->id}}">Delete</a>
                                                        <a class="dropdown-item" href="edit/{{$m->id}}">Update</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
@endsection