<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Index;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $free=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','Football'],
        ])->get();
        $tennis=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','Tennis'],
        ])->get();
        $Basketball=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','Basketball'],
        ])->get();
        $IceHockey=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','IceHockey'],
        ])->get();
        $volleyBall=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','volleyBall'],
        ])->get();
        $BandMinton=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','BandMinton'],
        ])->get();
        $BaseBall=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','BaseBall'],
        ])->get();
        $tableTennis=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','tableTennis'],
        ])->get();
        $Cycling=Index::where([
            ['status','=','0'],
            ['outcome','=','0'],
            ['type','=','Cycling'],
        ])->get();
        return view('welcome')
        ->with('cycling',$Cycling)
        ->with('tabletennis',$tableTennis)
        ->with('baseball',$BaseBall)
        ->with('bandminton',$BandMinton)
        ->with('volleyball',$volleyBall)
        ->with('icehockey',$IceHockey)
        ->with('basketball',$Basketball)
        ->with('tennis',$tennis)
        ->with('free',$free);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
