<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Zone extends Model
{
	use Notifiable;
	protected $fillable = [
        'id','name',
    ];
    //
	
	public static function validator(array $data)
    {
		//dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
			]);
    }	
	
	/**
     * Get the Zone for the Dutu.
     */
    public function dutu()
    {
        return $this->hasMany('App\Dutu','idzone','id');
    }
}
