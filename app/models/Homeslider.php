<?php

class Homeslider extends \Eloquent {

	protected $table = 'homeslider';

	protected $fillable = ['provincia_id', 'image', 'title', 'body'];

	public static $rules = [
		'title' => 'required',
		'body' => 'required',
		'image' => 'required',
	];

	public static $rulesUpdate = [
		'title' => 'required',
		'body' => 'required'
	];

	// Relacion
	public function provincia() {
		return $this->belongsTo('provincia');
	}

}