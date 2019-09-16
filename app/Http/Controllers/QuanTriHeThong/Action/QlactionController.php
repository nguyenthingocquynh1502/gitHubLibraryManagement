<?php

namespace App\Http\Controllers\QuanTriHeThong\Action;
use App\Http\Controllers\Controller;
use App\Entity\qlcontroller;
use App\Entity\qlaction;
use Illuminate\Http\Request;

class QlactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qlaction = qlaction::all();
        return view('admin.QuanTriHeThong.Action.Action.quanLyAction', ['qlaction'=>$qlaction]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $controller = qlcontroller::all();
        return view('admin.QuanTriHeThong.Action.Action.addAction', ['controller'=>$controller]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qlaction = new qlaction;
        $qlaction->tenac = $request->tenac;
        $qlaction->controllerid = $request->controllerid;
        $qlaction->kichhoat = $request->kichhoat;
        $qlaction->congcong = $request->congcong;
        $qlaction->save();
        return redirect('action/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\qlaction  $qlaction
     * @return \Illuminate\Http\Response
     */
    public function show(qlaction $qlaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\qlaction  $qlaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = qlaction::find($id);
        $controller = qlcontroller::all();
        return view('admin.QuanTriHeThong.Action.Action.updateAction', ['action'=>$action, 'controller'=>$controller]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\qlaction  $qlaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qlaction = qlaction::find($id);
        $qlaction->tenac = $request->tenac;
        $qlaction->controllerid = $request->controllerid;
        $qlaction->kichhoat = $request->kichhoat;
        $qlaction->congcong = $request->congcong;
        $qlaction->save();
        return redirect('action/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qlaction  $qlaction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qlaction = qlaction::find($id);
        $qlaction -> delete();
        return redirect('action/index');
    }
}
