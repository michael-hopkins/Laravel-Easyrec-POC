<?php namespace RecPoc\Http\Controllers;

use Easyrec;
use Auth;
use RecPoc\Movie;
use RecPoc\User;

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
	 * @return void
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
		return view('welcome');
	}

    public function import(){
        $return = [];
        $users = \RecPoc\User::with(['ratings'])->get();
        foreach($users as $user){
            echo $user->id;
            foreach($user->ratings as $rating){
                $movie = \RecPoc\Movie::whereId($rating->movie_id)->first();
                $movie_id = $movie->movie_id;
                $r = $rating->rating;
                $user_id = $user->id;
                echo "rating - ".$r." | movie - ".$movie_id."\n";
                Easyrec::rate($movie_id, $r, $user_id.$movie_id, '/'.$user_id.$movie_id, $user_id, $movie_id.".jpg", null, null, \Hash::make($user_id));
            }
        }
    }

}
