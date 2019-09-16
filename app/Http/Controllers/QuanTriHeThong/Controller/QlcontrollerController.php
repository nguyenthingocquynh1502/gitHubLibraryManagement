<?php

namespace  App\Http\Controllers\QuanTriHeThong\Controller;
use App\Http\Controllers\Controller;
use App\Entity\qlcontroller;
use App\Entity\qlmodules;
use Illuminate\Http\Request;

class QlcontrollerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qlcontroller = qlcontroller::all();
        return view('admin.QuanTriHeThong.Controller.Controller.quanLyController', ['qlcontroller'=>$qlcontroller]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module = qlmodules::all();
        return view('admin.QuanTriHeThong.Controller.Controller.addController', ['module'=>$module]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qlcontroller = new qlcontroller;
        $qlcontroller->ten = $request->ten;
        $qlcontroller->id_module = $request->id_module;
        $qlcontroller->kichhoat = $request->kichhoat;
        $qlcontroller->save();
        return redirect('controller/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\qlcontroller  $qlcontroller
     * @return \Illuminate\Http\Response
     */
    public function show(qlcontroller $qlcontroller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\qlcontroller  $qlcontroller
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qlcontroller = qlcontroller::find($id);
        $module = qlmodules::all();
        return view('admin.QuanTriHeThong.Controller.Controller.updateController', ['qlcontroller'=>$qlcontroller, 'module'=>$module]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\qlcontroller  $qlcontroller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qlcontroller = qlcontroller::find($id);
        $qlcontroller->ten = $request->ten;
        $qlcontroller->id_module = $request->id_module;
        $qlcontroller->save();
        return redirect('controller/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qlcontroller  $qlcontroller
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qlcontroller = qlcontroller::find($id);
        $qlcontroller -> delete();
        return redirect('controller/index');
    }
}
