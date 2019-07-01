<?php
namespace Modules\Outside\Http\Controllers;

use App\MyCore\MyController;
use Modules\Outside\Http\Models\Article;

/**
 * 
 */
class AboutController extends MyController
{
	private $_model = null;
    private $_params = array();
	
	function __construct()
	{
		$options = array();
        $this->_params = \Request::all();
        $this->data['params'] = $this->_params;
        parent::__construct($options);
        $this->data['controllerName'] = 'about';
        $this->_model = new Article();
	}

	public function getAbout(){
		$this->data['about'] = $this->_model->showAbout();

        return view("outside::{$this->data['controllerName']}.about", $this->data);
	}

	public function getAboutDetail($id){
		$this->data['detail'] = $this->_model->findOrNew($id);

		return view("outside::{$this->data['controllerName']}.about-detail", $this->data);
	}
}