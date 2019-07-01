<?php

namespace Modules\Inside\Http\Controllers;


use App\MyCore\MyController;
use Modules\Inside\Http\Models\Article;
use Modules\Inside\Http\Models\Category;
use Modules\Inside\Http\Requests\ArticleRequest;

class ArticleController extends MyController{
	private $_model = null;
    private $_params = array();

	function __construct()	{
		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);

        $this->data['title'] = 'Danh mục bài viết';
        $this->data['controllerName'] = 'article';
        $this->_model = new Article();
	}

	public function getShowAll(){
        $this->data['paginate'] = $this->_model->showAll()->paginate(PAGE_LIST_COUNT);
        
        return view("inside::{$this->data['controllerName']}.show-all", $this->buildDataView($this->data));
    }

    public function getAdd(){
    	$this->data['categories'] = (new Category())->getCategory();

    	return view("inside::{$this->data['controllerName']}.add", $this->buildDataView($this->data));
    }

    public function postAdd(ArticleRequest $request){
    	if ($this->_model->add($request)){
            return redirect("inside/{$this->data['controllerName']}/show-all");
    	}
	}

	public function getEdit($id){
		$this->data['categories'] = (new Category())->getCategory();
		$this->data['object'] = $this->_model->findOrNew($id);
        
        return view("inside::{$this->data['controllerName']}.edit", $this->buildDataView($this->data));
	}

	public function postEdit(ArticleRequest $request, $id){
		if($this->_model->edit($id, $request)){
            return redirect("inside/{$this->data['controllerName']}/show-all");
        }
	}

    public function postDelete(ArticleRequest $request){

        $input = $request->all();

        $this->_model->remove($id);
    }
}
