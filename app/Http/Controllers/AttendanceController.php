<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dutu;
use App\Zone;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {return ('Đây là trang view dự tu');
        return redirect()->route('home');
        dd('ahdjhabsdhjsbf');
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
    }
}
