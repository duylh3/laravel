<?php

namespace Modules\Outside\Http\Controllers;

use App\MyCore\MyController;
use Modules\Outside\Http\Models\Product;

/**
 * 
 */
class ProductController extends MyController
{
	
	function __construct()
	{
		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['controllerName'] = 'product';
        $this->_model = new Product();
	}

	public function getProduct(){

		$this->data['buoi'] = $this->_model->showBuoi();

		$this->data['cam']  = $this->_model->showCam();

		return view("outside::{$this->data['controllerName']}.product", $this->data);
	}

	public function getProductDetail($id){

		$product = $this->_model->findOrNew($id);

		$productType = $product['product_type_id'];

		$this->data['object'] = $product;

		$this->data['types'] = $this->_model->getProductByTypeId($productType);

		return view("outside::{$this->data['controllerName']}.show-detail", $this->buildDataView($this->data));
	}
}