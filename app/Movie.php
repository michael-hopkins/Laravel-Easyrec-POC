<?php namespace RecPoc;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * RecPoc\Movie
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|Rating[] $ratings
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static Builder|Movie whereId($value)
 * @method static Builder|Movie whereName($value)
 * @method static Builder|Movie whereCreatedAt($value)
 * @method static Builder|Movie whereUpdatedAt($value)
 */
class Movie extends Model {

	protected $guarded = ['id'];

    public function ratings(){
        return $this->hasMany(Rating::class);
    }

}
