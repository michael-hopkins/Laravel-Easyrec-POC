<?php namespace RecPoc;

use Illuminate\Database\Eloquent\Model;

class BookRating extends Model {

    protected $guarded = ['id'];
    protected $table = 'book_ratings';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function book(){
        return $this->belongsTo(Book::class);
    }

}
