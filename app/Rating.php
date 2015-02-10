<?php namespace RecPoc;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

	protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('User');
    }

    public function movie(){
        return $this->belongsTo('Movie');
    }

}
