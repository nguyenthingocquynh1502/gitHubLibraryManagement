<?php

namespace App\Http\Controllers\QuanTriHeThong\Module;
use App\Http\Controllers\Controller;
use App\Entity\qlmodules;
use Illuminate\Http\Request;

class QlmodulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qlmodules = qlmodules::all();
        return view('admin.QuanTriHeThong.Module.Module.quanLyModule', ['qlmodules'=>$qlmodules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.QuanTriHeThong.Module.Module.addModule');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qlmodules = new qlmodules;
        $qlmodules->ten = $request->ten;
        $qlmodules->kichhoat = $request->kichhoat;
        $qlmodules->save();
        return redirect('module/module');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\qlmodules  $qlmodules
     * @return \Illuminate\Http\Response
     */
    public function show(qlmodules $qlmodules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\qlmodules  $qlmodules
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qlmodules = qlmodules::find($id);
        return view('admin.QuanTriHeThong.Module.Module.updateModule', ['qlmodules'=>$qlmodules]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\qlmodules  $qlmodules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $qlmodules = qlmodules::find($id);
        $qlmodules->ten = $request->ten;
        $qlmodules->kichhoat = $request->kichhoat;
        $qlmodules->save();
        return redirect('module/module');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qlmodules  $qlmodules
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qlmodules = qlmodules::find($id);
        $qlmodules -> delete();
        return redirect('module/module');
    }
    
}
