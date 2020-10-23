<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Dutu;
use App\Zone;
use App\Attendance;
use Auth;
use Redirect;

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
        $idzone = $dutu->idzone;
        //dd($dutu);
        //$lstdutu;
        if($roleid == 1 || $roleid == 2)
        {
            if($roleid == 2)
            {
                $lstdutu = Zone::findOrFail($idzone)->dutu->all();
                return view('user.attend')->with('lstdutu',$lstdutu);
            }
            else
            {
                $lstdutu = Dutu::all();
                return view('user.attend')->with('lstdutu',$lstdutu);
            }
            //return 'admin';

        }
       return redirect()->route('home');
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
        $data = json_decode($request->data, true);
        $roleid = Auth::user()->roleid;
        
        //return $user;
        if($roleid == 1 || $roleid == 2 )
        {
            foreach ($data as $dt) 
            {
                if($roleid == 2)
                {
                    $user = Dutu::findOrFail(Auth::id()); //Lấy Trưởng nhóm vừa đăng nhập
                    $y1 = $user->idzone;
                    //return $y1;
                    
                    
                    try {
                        $dutu2 = Dutu::findOrFail($dt['iddutu']); //thử lấy dutu2 là ID được gửi từ bảng điểmm danh vào
                    } catch (Exception $e) {
                        return "Lỗi ".$e->getMessage();
                    }

                    $y2 = $dutu2->idzone;
                    if ($y1 != $y2) {
                        return "vô break";
                        break;
                    # code...
                    }
                }
                
                $dt['month'] = $request->month;
                $dt['year'] = $request->year;
                if(Attendance::validator($dt)->fails())
                {
                    return "Validate Errors";
                }
                else
                {
                    $check=Dutu::get()->where('id',$dt['iddutu'])->first()->getattend->where('month',$request->month)->where('year',$request->year);
                    if(count($check) == 0) //Chưa có  bản ghi nào, INSERT
                    {
                        try {
                        Attendance::create(
                            ['iddutu' => $dt['iddutu'],
                            'month' => $request->month,
                            'year' => $request->year,
                            'status' => $dt['status'],
                            'note' => $dt['note'],
                            ]);                        
                        } catch (\Exception $e) {
                            return $e->getMessage();
                            
                        }
                    }
                    else{
                        try {
                        Attendance::where('iddutu',$dt['iddutu'])->where('month',$request->month)->where('year',$request->year)->update(
                            ['status' => $dt['status'],
                            'note' => $dt['note'],
                            ]);                        
                        } catch (\Exception $e) {
                            return $e->getMessage();
                            
                        }
                    }
                    
                }
            }
            return "Thành công!!!";
        }
        else
        {
            //$data = json_decode($request->data, true);
            return "Bạn không có quyền điểm danh";
            
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
