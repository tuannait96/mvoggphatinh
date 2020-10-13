<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.attend');
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
        dd();
        //
        if(Auth::user()->roleid!=1||Auth::user()->roleid!=2)
        {
            dd('Bạn không có quyền điểm danh');
        }
        else
        {
            $data = json_decode($request->data, true);
            dd($data);
            if(Attendance::validator($request->all()->fails()))
            {
                return Redirect::back();
            }
            else
            {
                try {
                    Attendance::create(
                        ['iddutu' => $request->iddutu,
                        'month' => $request->month,
                        'year' => $request->year,
                        'status' => $request->status,
                        'note' => $request->note,
                        ]);
                    return redirect()->route('home');
                    
                } catch (Exception $e) {
                    
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
        if(Auth::user()->roleid!=1)
        {
            return Redirect::back()->with('message','Bạn không có quyền thực hiện hành động này!!!');
        }
        Attendance::where('id',$id)->delete();
        return Redirect::back();
    }
}
