<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PaperDutu extends Model
{
	use Notifiable;
	protected $fillable = [
        'id','iddutu','idpaper','url','status',
    ];
    //
}
