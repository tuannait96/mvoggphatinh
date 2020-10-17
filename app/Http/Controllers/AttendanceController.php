<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dutu;
use App\Zone;
use App\Attendance;
use Auth;

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
        //$roleid='213234';
        $roleid = Auth::user()->roleid;
        $id = Auth::id();
        $dutu = Dutu::all()->where('id',$id)->first();
        //dd($dutu->idzone);
        //$lstdutu;
        if($roleid == 1||$roleid == 2)
        {
            if($roleid == 2)
            {
                $lstdutu = Zone::first()->dutu->all();
                return view('user.attend')->with('lstdutu',$lstdutu);
            }
            else
            {
                $lstdutu = Dutu::all();
                return view('user.attend')->with('lstdutu',$lstdutu);
            }
            //return 'admin';

        }
       // return view('user.attend',compact('lstdutu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create AttendanceController');
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
        if(Auth::user()->roleid!=1||Auth::user()->roleid!=2)
        {
            //dd('Bạn không có quyền điểm danh');
        }
        else
        {
            $data = json_decode($request->data, true);
            //dd($data);
            foreach ($data as $dt) 
            {
                if(Attendance::validator($dt->fails()))
                {
                   // return Redirect::back();
                    return redirect()->route('home');
                }
                else
                {
                    try {
                        Attendance::create(
                            ['iddutu' => $dt->iddutu,
                            'month' => $request->month,
                            'year' => $request->year,
                            'status' => $dt->status,
                            'note' => $dt->note,
                            ]);
                        return redirect()->route('home');
                        
                    } catch (Exception $e) {
                        return redirect()->route('home');
                        
                    }
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
        dd('show AttendanceController');
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
        dd('edit AttendanceController');
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
        dd('update AttendanceController');
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
