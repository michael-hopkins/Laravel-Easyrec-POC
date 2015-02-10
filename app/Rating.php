<?php namespace RecPoc;

use Illuminate\Database\Eloquent\Model;

/**
 * RecPoc\Rating
 *
 * @property-read User $user
 * @property-read Movie $movie
 * @property integer $id
 * @property integer $user_id
 * @property integer $movie_id
 * @property integer $rating
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\RecPoc\Rating whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\RecPoc\Rating whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\RecPoc\Rating whereMovieId($value)
 * @method static \Illuminate\Database\Query\Builder|\RecPoc\Rating whereRating($value)
 * @method static \Illuminate\Database\Query\Builder|\RecPoc\Rating whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\RecPoc\Rating whereUpdatedAt($value)
 */
class Rating extends Model {

	protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

}
