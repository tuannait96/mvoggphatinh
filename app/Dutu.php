<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Validator;

class Dutu extends Model
{
	use Notifiable;
	
	protected $fillable = [
        'id','name','holyname','dob','school','majors','parish','idzone','idyear','idstatus',
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
		//dd($data);
        return Validator::make($data, [
			'holyname' => ['required','string','max:255'],
            'name' => ['required', 'string', 'max:255'],
			'dob' => ['required','date'],
			'parish' => ['required', 'string', 'max:255'],
			'school' => ['required','string','max:255'],
			'majors' => ['required','string','max:255'],
			'idzone' => ['required', 'int', 'max:255'],
			'idyear' => ['required', 'int', 'max:255'],
			//'idstatus' => ['required', 'int','max:255'],
        ]);
    }	
}
