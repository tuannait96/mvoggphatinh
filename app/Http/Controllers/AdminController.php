<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attendance;
use App\Role;
use App\Dutu;
use App\Zone;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

		//test insert dutu
		$data=[];
		$data=[
			'holyname'=>'Peter',
            'name' => 'Tuấn',
			'dob'=>'1993-02-02',
			'parish'=>'Khe gát',
			'school'=>'Bách Khoa Đà Nẵng',
			'majors'=>'Công Nghệ thông tin',
			'idzone'=>1,
			'idyear'=>1,
			'idstatus'=>1
		];
		
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
