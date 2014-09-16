<?php

class Ultimospartidos extends \Eloquent {

	protected $table = 'ultimospartidos';

	protected $fillable = ['provincia_id', 'team_a', 'team_b', 'results', 'description'];

	public static $rules = [
		'provincia_id' => 'required',
		'team_a' => 'required',
		'team_b' => 'required',
		'results' => 'required',
		'description' => 'required',
	];

	public function provincia() {
		return $this->belongsTo('Provincia');
	}
}