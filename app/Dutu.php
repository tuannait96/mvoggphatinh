<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Validator;

class Dutu extends Model
{
	use Notifiable;
	
	protected $fillable = [
        'id','name','holyname','dob','parish','idzone','idyear','idstatus',
    ];
    //
	/**
     * Get the Zone for the Dutu.
     */
    public function namezone()
    {
        return $this->belongsTo('App\Zone','idzone','id');
    }
	
	//get the Year for Dutu
	public function nameyear()
	{
		return $this->belongsTo('App\Year','idyear','id');
	}
	//get the status for Dutu
	public function namestatus()
	{
		return $this->belongsTo('App\Status','idstatus','id');
	}
	
	//get diem danh for dutu
	public function getattend()
	{
		return $this->hasMany('App\Attendance','iddutu','id');
	}
	
	public static function validator(array $data)
    {
		//dd();
        return Validator::make($data, [
			'holyname'=>['required','string','max:255'],
            'name' => ['required', 'string', 'max:255'],
			'dob'=>['required','date'],
			'parish'=>['required', 'string', 'max:255'],
			'school'=>['required','string','max:255'],
			'majors'=>['required','string','max:255'],
			'idzone'=>['required', 'bigint', 'max:255'],
			'idyear'=>['required', 'bigint', 'max:255'],
			'idstatus'=>['required', 'bigint','max:255'],
        ]);
    }

    /**
     * Create a new Dutu instance after a valid registration.
     *
     * @param  asrray  $data
     * @return \App\Dutu
     */
	 /*
    public static function Create(int $id, array $data)
    {
        return Dutu::create([
            'id' => $id,
            'holyname' => $data['holyname'],
			'name'=>$data['name'],
			'dob'=>$data['dob'],
			//'school'=>$data['school'],
			//'majors'=>$data['majors'],
			'parish'=>$data['parish'],
			'idzone'=>$data['idzone'],
			'idyear'=>$data['idyear'],
			'idstatus'=>$data['idstatus'],
        ]);
		
		//
		Dutu::create([
            'id' =>6,
            'holyname' => $data['holyname'],
			'name'=>$data['name'],
			'dob'=>$data['dob'],
			//'school'=>$data['school'],
			//'majors'=>$data['majors'],
			'parish'=>$data['parish'],
			'idzone'=>$data['idzone'],
			'idyear'=>$data['idyear'],
			'idstatus'=>$data['idstatus'],
        ]);
		
    }
	*/
	
}
