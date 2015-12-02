<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MovieController extends Controller
{
	
	// power our /movies page
	function index()
	{
		$movies = \App\Movie::all();

		// echo '<pre>';
		// print_r($movies);
		// echo '</pre>';

		// $dictionary = [ 'cat' => 'my lovable annoying pet', 'dog' => 'one which loves walks' ];
		// echo $dictionary['cat'];

		return view('movies.index', [ 'all_movies' => $movies ]);
	}

}