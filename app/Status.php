<?php namespace Ilaravel\Core;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

	protected $fillable = ['status', 'slug'];

	public function articles()
	{
		return $this->hasMany('Ilaravel\Core\Article');
	}

}
