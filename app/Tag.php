<?php namespace Ilaravel\Core;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	public function articles()
	{
		return $this->belongsToMany('Ilaravel\Core\Article', 'article_tag');
	}

}
