<?php namespace RecPoc\Http\Controllers;

use Easyrec;
use Input;
use RecPoc\MovieRating;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

    /**
     * Create a new controller instance.
     *
     */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $id = 181;
        $results = Easyrec::ratedGoodByOther($id);
        echo "<pre>";
        print_r($results);
        echo "</pre>";
	}

    public function import()
    {
        if(Input::has('password') && Input::get('password') === 'yesIActuallyWantToKickThisOff'){
            foreach(range(1,100000) as $index){
                $rating = MovieRating::with(['movie'])->find($index);
                $movie = $rating->movie;
                $movie_id = $movie->id;
                $r = $rating->rating;
                $user_id = $rating->user_id;
                $session_id = $user_id . str_random(10) . $movie_id;
                Easyrec::rate($movie_id, $r, $movie->name, '/movies/'.$movie_id, $user_id, $movie_id.".jpg", null, null, $session_id);
            }
        }
    }
}
