<?php namespace App\Modules\Crevisoft;

use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model {

	/**
	 * Spescify the storage table.
	 * 
	 * @var table
	 */
	protected $table    = 'subscriptions';

	/**
	 * Specify the fields allowed for the mass assignment.
	 * 
	 * @var fillable
	 */
	protected $fillable = ['email'];
}
