<?php

namespace Modules\Outside\Http\Controllers;

use App\MyCore\MyController;
use Modules\Outside\Http\Models\Article;


class CertController extends MyController{

	function __construct(){

		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['controllerName'] = 'cert';
        $this->_model = new Article();
	}


	public function getCert(){

		$this->data['cert'] = $this->_model->showCert();

		return view("outside::{$this->data['controllerName']}.show-cert", $this->data);
	}

	public function getCertDetail($id){
		$this->data['object'] = $this->_model->findOrNew($id);

		return view("outside::{$this->data['controllerName']}.cert-detail", $this->data);
	}
}