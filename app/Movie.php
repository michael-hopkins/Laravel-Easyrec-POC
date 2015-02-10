<?php namespace RecPoc;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	protected $guarded = ['id'];

    public function ratings(){
        return $this->hasMany('Rating');
    }

}
