<?php

namespace Modules\Outside\Http\Models;

use App\MyCore\DbTable;

/**
 * 
 */
class Article extends DbTable
{
	public $primaryKey = 'article_id';
	
	function __construct($options = array())
	{
		parent::__construct($options);

        $this->table = 'articles';

        $this->params = \Request::all();
	}

	public function showAbout(){
		$data = Article::select('categories.category_id', $this->table. ".*")
				->join('categories','categories.category_id', '=', $this->table. '.category_id')
				->where([
                    'categories.is_deleted' => 0,
                    'articles.is_deleted' => 0,
                    'categories.category_name' => 'Giới thiệu'
                ])->orderBy('created_date', 'asc')
                ->get();

        return $data;        
	}

	public function showProcess(){
				$data = Article::select('categories.category_id', $this->table. ".*")
				->join('categories','categories.category_id', '=', $this->table. '.category_id')
				->where([
                    'categories.is_deleted' => 0,
                    'articles.is_deleted' => 0,
                    'categories.category_name' => 'Quy trình'
                ])->orderBy('created_date', 'asc')
                ->get();

        return $data; 
	}

	public function showCert(){
				$data = Article::select('categories.category_id', $this->table. ".*")
				->join('categories','categories.category_id', '=', $this->table. '.category_id')
				->where([
                    'categories.is_deleted' => 0,
                    'articles.is_deleted' => 0,
                    'categories.category_name' => 'Chứng chỉ'
                ])->orderBy('created_date', 'asc')
                ->get();

        return $data; 
	}

		public function showNews(){
				$data = Article::select('categories.category_id', $this->table. ".*")
				->join('categories','categories.category_id', '=', $this->table. '.category_id')
				->where([
                    'categories.is_deleted' => 0,
                    'articles.is_deleted' => 0,
                    'categories.category_name' => 'Sự kiện'
                ])->orderBy('created_date', 'asc')
                ->get();

        return $data; 
	}
}