<?php

namespace Modules\Inside\Http\Controllers;


use App\MyCore\MyController;
use Modules\Inside\Http\Models\Product;
use Modules\Inside\Http\Models\ProductType;
use Modules\Inside\Http\Requests\ProductRequest;

class ProductController extends MyController{

	private $_model = null;
    private $_params = array();

    public function __construct() {
        $options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['title'] = 'Danh mục sản phẩm';
        $this->data['controllerName'] = 'product';
        $this->_model = new Product();
    }

    public function getShowAll(){
        $this->data['paginate'] = $this->_model->showAll()->paginate(PAGE_LIST_COUNT);

        return view("inside::{$this->data['controllerName']}.show-all", $this->buildDataView($this->data));
    }
    public function getAdd(){
    	$this->data['productTypes'] = (new ProductType())->getProductTypes();
        return view("inside::{$this->data['controllerName']}.add", $this->buildDataView($this->data));
    }
    public function postAdd(ProductRequest $request){
        if ($this->_model->add($request)){
            return redirect("inside/{$this->data['controllerName']}/show-all");
        }
    }
    public function getEdit($id){
        $this->data['productTypes'] = (new ProductType())->getProductTypes();
        $this->data['object'] = $this->_model->findOrNew($id);
        return view("inside::{$this->data['controllerName']}.edit", $this->buildDataView($this->data));
    }

    public function postEdit(ProductRequest $request, $id){
        if($this->_model->edit($id, $request)){
            return redirect("inside/{$this->data['controllerName']}/show-all");
        }
    }

    public function postDelete($id){
        $this->_model->remove($id);
    }
}