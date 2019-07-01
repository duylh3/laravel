<?php

namespace Modules\Outside\Http\Controllers;

use App\MyCore\MyController;
use Modules\Outside\Http\Models\Article;

/**
 * 
 */
class ProcessController extends MyController
{
	
	function __construct(){

		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['controllerName'] = 'process';
        $this->_model = new Article();
	}

	public function getProcess(){
		$this->data['object'] = $this->_model->showProcess();

		return view("outside::{$this->data['controllerName']}.process", $this->buildDataView($this->data));
	}
}