<?php

class News extends \Eloquent {

	protected $table = 'news';

	protected $fillable = ['title', 'body', 'provincia_id', 'slug'];

	public static $rules = [
		'title' => 'required',
		'body' => 'required',
		'provincia_id' => 'required',
	];

	// Relacion
	public function provincia() {
		return $this->belongsTo('provincia');
	}
	
}