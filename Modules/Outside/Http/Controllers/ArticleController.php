<?php

namespace Modules\Outside\Http\Controllers;

use App\MyCore\Routing\MyController;
use Modules\Outside\Http\Models\Article;

/**
 * 
 */
class ArticleController extends MyController
{
	
	function __construct(){

		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['controllerName'] = 'article';
        $this->_model = new Article();
	}

	
}