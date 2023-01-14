<?php

namespace App\Controller;

use App\Model\MovieModel;

class MovieController {
	private string $name_movie;
	private string $director;
	private string $category;
	private $allMovies = [];
	private $favoriteMovie = [];
	private $data_1 = [];

	public function getAllMovies(): array
	{
		$movies = new MovieModel();

		$this->allMovies = $movies->getData();

		return $this->allMovies;
	}

	public function __construct(string $name_movie, string $director, array $favoriteMovie, string $category)
	{
		$this->name_movie = $name_movie;
		$this->director = $director;
		$this->category = $category;
		$this->favoriteMovie = [
			'name_movie' => $this->name_movie,
			'director' => $this->director,
			'category' => $this->category,
		];
	}

	public function addMovie()
	{
		function fullInfo()
		{
			foreach($allMovies as $i)
			{
				if($i["id"]==$key){
				array_push($result, "true");
			}else{
				array_push($result, "false")
			}
			return $result;
		    }
		}

		$check = $this->fullInfo($key);
		if(!$check){
			return false
		}
	}

	public function deleteMovie(int $id)
	{
		//TODO delete movie
	}
}