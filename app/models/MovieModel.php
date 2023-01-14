<?php

namespace App\Model;

class MovieModel {
	protected array $data = [
		[
			"id" => 0,
			"name_movie" => "Harry Potter and the Philosopher's Stone",
			"director" => "Chris Columbus",
		    "category" => "fantastic"],

        [
            'id' => 1,
			'name_movie' => 'The Devil Wears Prada',
            'director' => 'David Frankel',
		    'category' => 'comedy'],
	];

	public function getData(): ?array
	{
		return $this->data;
	}
}