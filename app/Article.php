<?php namespace Ilaravel\Core;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	public function user()
	{
			return $this->belongsTo('Ilaravel\Core\User');
	}

	public function status()
	{
		return $this->belongsTo('Ilaravel\Core\Status');
	}

	public function tags()
	{
		return $this->belongsToMany('Ilaravel\Core\Tag', 'article_tag');
	}


}
