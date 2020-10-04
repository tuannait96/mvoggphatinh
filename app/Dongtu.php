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
}
