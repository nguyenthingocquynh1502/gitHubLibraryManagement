<?php

namespace App\Http\Controllers\QuanTriHeThong\Menu;

use App\qlaction;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qlaction = qlaction::all();
        return view('admin.quanLyAction', ['qlaction'=>$qlaction]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addAction');
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
        $qlaction->save();
        return redirect('action/action');
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
        $qlaction = qlaction::find($id);
        return view('admin.updateAction', ['qlaction'=>$qlaction]);
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
        $qlaction->save();
        return redirect('action/action');
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
        return redirect('action/action');
    }
}
