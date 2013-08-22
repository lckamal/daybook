<?php

class Project extends Eloquent{
	public $table = 'projects';
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'slug' => 'required',
		'description' => 'required'
	);
}