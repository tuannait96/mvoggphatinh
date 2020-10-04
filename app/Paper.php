<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Paper extends Model
{
	use Notifiable;
	protected $fillable = [
        'id','time',
    ];
    //
}
