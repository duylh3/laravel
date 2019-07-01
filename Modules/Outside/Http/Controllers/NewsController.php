<?php

namespace Modules\Outside\Http\Controllers;

use App\MyCore\MyController;
use Modules\Outside\Http\Models\Article;


class NewsController extends MyController{

	function __construct(){

		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['controllerName'] = 'news';
        $this->_model = new Article();
	}


	public function getNews(){

		$this->data['news'] = $this->_model->showNews();

		return view("outside::{$this->data['controllerName']}.news", $this->data);
	}
}