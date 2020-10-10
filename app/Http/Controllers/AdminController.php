<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attendance;
use App\Role;
use App\Dutu;
use App\Zone;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		if (Auth::user()->roleid!=1) {
            //dd();
            return '/home';
        }
        // hàm index của admin sẽ trả về danh sách các dự tu, thống kê số lượng dự tu các nhóm hiển thị lên biểu đồ của admin
        //$iddt=Attendance::all()->pluck('user','iddutu')->where('id','1');
        $iddt=Dutu::get();
		/*dd($iddt->namezone);
        foreach ($iddt as $i) {
            //dd($i->namezone->name);
        }*/


		//get all dutu from zone...
		$izone=Dutu::get();
		//dd($izone->id);
		//dd($izone->first->getattend->status);
        //update 1 model
        //Role::where('id', 4)->update(['name' => 'Cha Giáo']);
        return view('admin.dutu.danhsach',compact('iddt','izone'));
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		dd('12122');
		
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
