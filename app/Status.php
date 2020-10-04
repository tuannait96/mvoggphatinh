<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Status extends Model
{
	use Notifiable;
	protected $fillable = [
        'id','name',
    ];
    //
}
