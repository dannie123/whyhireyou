<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model {

	protected $table = 'jobs';

	public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function type(){
        return $this->belongsTo('App\Models\Type');
    }

}
