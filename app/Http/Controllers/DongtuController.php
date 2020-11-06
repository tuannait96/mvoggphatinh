<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dongtu;

use Auth;
use Redirect;


class DongtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return về form tạo mới dòng tu
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->roleid == 1)
        {
            if (Dongtu::validator($request->all())->fails()) {
                # code...
                return Redirect::back()->withErrors(Dongtu::validator($request->all()));
            }
            else
            {
                try {
                    Dongtu::create(
                        ['name'=>$request->name,
                        'information'=>$request->infor,
                        ]);
                    return Redirect::back()->with('message','Tạo thành công dòng tu!!!');
                } catch (\Exception $e) {
                    return Redirect::back()->with('message','Tạo không thành công!!!');
                }
            }
        }
        else
        {
            return Redirect::back()->with('message','Bạn không có quyền thêm mới một dòng tu!!!');
        }
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
		$dongtu=Dongtu::where('id',$id)->first();
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
		$dongtu=Dongtu::where('id',$id)->first();
		// return view
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
		Dongtu::where('id',$id)->update(
		['name'=>$request->name,
		'information'=>$request->infor,
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
        if(Auth::user()->roleid!=1)
        {
            return Redirect::back()->with('message','Bạn không có quyền thực hiện hành động này!!!');
        }
		Dongtu::where('id',$id)->delete();
		return Redirect::back();
    }
}
