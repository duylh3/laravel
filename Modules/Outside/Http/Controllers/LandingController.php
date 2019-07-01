<?php

namespace Modules\Outside\Http\Controllers;

use App\MyCore\MyController;
use Modules\Outside\Http\Models\Product;


class LandingController extends MyController{

	function __construct(){

		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['controllerName'] = 'landing';
        $this->_model = new Product();
	}

	public function getIndex(){
		$this->data['products'] = $this->_model->showProduct();

		return view("outside::{$this->data['controllerName']}.index", $this->data);
	}
}