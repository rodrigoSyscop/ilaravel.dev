<?php namespace Ilaravel\Core;

use Illuminate\Database\Eloquent\Model;

class Status extends Model {

	public function articles()
	{
		return $this->hasMany('Ilaravel\Core\Article');
	}

}
