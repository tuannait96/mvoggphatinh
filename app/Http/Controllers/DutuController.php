<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dutu;
use Auth;
use Log;

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
		$id=Auth::user()->roleid;
		if($id==1)
		{
			dd('Bạn không có quyền tạo mới Dự tu!!!');
		}
		else
		{
			//
			if(Dutu::get('id',$id)->count()!=1)
			{
				$error;
				$user=Auth::user();
				$dutu=Dutu::get()->where('id',$id)->first();
				return view('auth.update_info',compact('error','dutu','user'));
			}
			return view('auth.create');
		}
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
		if(Auth::user()->roleid==1)
		{
			dd('Không tạo mới được Dự tu');
		}
		else
		{
			$request->idstatus=2;
			if(Dutu::validator($request->all())->fails())
			{
				dd('fails');
			}
			else
			{
				try{
					dd(Auth::id());
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
					return('home');
				}
				catch(\Exception $e)
				{
					dd(($e));
				}
			}
		}
		
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		
		
		$user=Auth::user();
        // view thông tin của 1 dự tu
		$dutu=Dutu::get()->where('id',$id)->first();
		//dd($dutu);
		// trả về dự tu return view
		return view('auth.update_info',compact('dutu','user'));
		
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
		dd('hahaha');
		if(Auth::user()->roleid==1)
		{
			$request->idstatus = 1;
		}
		else
		{
			$request->idstatus = 2;		
		}
		$user=Auth::user();
		$dutu=Dutu::get()->where('id',$id)->first();
		
		$vali=Dutu::validator($request->all());
		//dd($vali->errors());
		if(Dutu::validator($request->all())->fails())
		{
			$error=$vali->errors();
			dd($error);
			return view('auth.update_info',compact('error','dutu','user'));
		}
		else
		{
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
		return redirect()->url('admin');
    }
}
