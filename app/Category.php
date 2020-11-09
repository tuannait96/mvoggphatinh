<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Validator;

class Category extends Model
{
    //
    use Notifiable;
    protected $fillable = [
        'name',
    ];

    public function getpost()
    {
    	return $this->hasMany('App\Post','idpost','id');
    }

    public static function validator(array $data)
    {
    	return Validator::make($data,[
    		'name' => ['required','string'],
    	],
    	[
    		'required' => ':attribute không được để trống',
    		'string' => '"attribute chỉ được nhập kí tự',

    	],
    	[
    		'name' => 'Tên',
    	]);
    }
}
