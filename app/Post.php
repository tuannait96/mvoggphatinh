<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Validator;

class Post extends Model
{
	use Notifiable;
	protected $fillable = [
        'id','content',
    ];
    //
	public static function validator(array $data)
    {
		//dd($data);
        return Validator::make($data, [
			'content' => ['required','string'],
        ]);
    }	
}
