<?php namespace RecPoc;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    protected $guarded = ['id'];

    public function bookRatings(){
        return $this->hasMany(BookRating::class);
    }

	//

}
