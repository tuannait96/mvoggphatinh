<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Attendance extends Model
{
	use Notifiable;
	protected $fillable = [
        'id','iddutu','month','year','status','note',
    ];
	
	
	//get the attend for dutu
	public function attend()
    {
        return $this->belongsTo('App\Dutu','iddutu','id');
    }
	
    //
}
