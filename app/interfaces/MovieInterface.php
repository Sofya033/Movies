<?php

namespace App\Rule;

interface MovieInterface{
	public function getFavoriteMovies(): ?array;
	public function addMovie(array $book): void;
	public function deleteMovie(int $id): void;
}