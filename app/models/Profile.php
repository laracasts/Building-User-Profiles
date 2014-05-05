<?php 

class Profile extends Eloquent {

	/**
	 * Fillable fields for a Profile
	 *
	 * @var array
	 */
	protected $fillable = [
		'location', 'bio',
		'twitter_username', 'github_username'
	];

	/**
	 * A profile belongs to a user
	 *
	 * @return mixed
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}

} 