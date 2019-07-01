<?php

namespace Modules\Inside\Http\Controllers;


use App\MyCore\MyController;
use Modules\Inside\Http\Models\ProductType;
use Modules\Inside\Http\Requests\ProductTypeRequest;


class ProductTypeController extends MyController{

	private $_model = null;
    private $_params = array();

    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['title'] = 'Danh mục sản phẩm';
        $this->data['controllerName'] = 'product-type';
        $this->_model = new ProductType();
    }

    public function getShowAll(){
        $this->data['paginate'] = $this->_model->showAll()->paginate(PAGE_LIST_COUNT);

        return view("inside::{$this->data['controllerName']}.show-all", $this->buildDataView($this->data));
    }
    public function getAdd(){
        return view("inside::{$this->data['controllerName']}.add", $this->buildDataView($this->data));
    }
    public function postAdd(ProductTypeRequest $request){
        if ($this->_model->add($request)){
            return redirect("inside/{$this->data['controllerName']}/show-all");
        }
    }
}

