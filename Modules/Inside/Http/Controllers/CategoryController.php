<?php
namespace Modules\Inside\Http\Controllers;

use App\MyCore\MyController;
use Modules\Inside\Http\Models\Category;
use Modules\Inside\Http\Requests\CategoryRequest;

class CategoryController extends MyController{

	private $_model = null;
	private $_params = array();

	function __construct()	{
		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['title'] = 'Danh sách chuyên mục';
        $this->data['controllerName'] = 'category';
        $this->_model = new Category();
	}

	public function getShowAll(){
		$this->data['paginate'] = $this->_model->showAll();

		return view("inside::{$this->data['controllerName']}.show-all", $this->buildDataView($this->data));
	}

	public function getAdd(){
		return view("inside::{$this->data['controllerName']}.add", $this->buildDataView($this->data));
	}

	public function postAdd(CategoryRequest $request){
		if($this->_model->add($request)){
			return redirect("inside/{$this->data['controllerName']}/show-all");
		}
	}

	public function getEdit($id){
		$this->data['object'] = $this->_model->findOrNew($id);

		return view("inside::{$this->data['controllerName']}.edit", $this->buildDataView($this->data));
	}

	public function postEdit(CategoryRequest $request, $id){
		if($this->_model->edit($id, $request)){
			return redirect("inside/{$this->data['controllerName']}/show-all");
		}
	}

	public function destroy($id){
		$this->_model->remove($id);
	}
}