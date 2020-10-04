<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mail extends Model
{
	use Notifiable;
	protected $fillable = [
        'id','content','sentto',
    ];
    //
}
