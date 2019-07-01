<?php

namespace Modules\Outside\Http\Controllers;

use App\MyCore\MyController;
use Modules\Outside\Http\Models\Article;


class ContactController extends MyController{

	function __construct(){

		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['controllerName'] = 'contact';
        $this->_model = new Article();
	}

	public function getContact(){
		return view("outside::{$this->data['controllerName']}.contact");
	}
}