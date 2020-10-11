<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Dongtu extends Model
{
	use Notifiable;
	protected $fillable = [
        'id','name','information',
    ];
    //
	
	public static function validator(array $data)
    {
		//dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
			'information' => ['required','string'],
        ]);
    }	
}
