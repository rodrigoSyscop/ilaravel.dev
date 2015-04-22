<?php namespace Ilaravel\Core;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $fillable = ['tag', 'slug'];

	public function articles()
	{
		return $this->belongsToMany('Ilaravel\Core\Article', 'article_tag');
	}

}
