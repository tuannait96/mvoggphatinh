<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dutu;

class DutuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return ('Đây là trang view dự tu');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return ve form tạo mới đự tu
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
		Dutu::create(
		['id'=>Auth::id(),
		'holyname'=>$request->holyname,
		'name'=>$request->name,
		'dob'=>$request->dob,
		'parish'=>$request->parish,
		'school'=>$request->school,
		'majors'=>$request->majors,
		'idzone'=>$request->idzone,
		'idyear'=>$request->idyear,
		'idstatus'=>$request->idstatus,
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
		
		
        // view thông tin của 1 dự tu
		$dutu=Dutu::get()->where('id',$id);
		//dd($dutu);
		// trả về dự tu return view
		
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
		$dutu=Dutu::where('id',$id)->first();
		//return view
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
		Dutu::where('id',$id)->update(
		['holyname'=>$request->holyname,
		'name'=>$request->name,
		'dob'=>$request->dob,
		'parish'=>$request->parish,
		'school'=>$request->school,
		'majors'=>$request->majors,
		'idzone'=>$request->idzone,
		'idyear'=>$request->idyear,
		'idstatus'=>$request->idstatus,
		]);
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
		Dutu::where('id',$id)->delete();
    }
}
