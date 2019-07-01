<?php

namespace Modules\Outside\Http\Models;

use App\MyCore\DbTable;

/**
 * 
 */
class Product extends DbTable
{

	public $primaryKey = 'product_id';
	
	function __construct($options = array())
	{
		parent::__construct($options);

        $this->table = 'products';

        $this->params = \Request::all();
	}

	public function showBuoi(){
		$data = Product::select('product_types.product_type_id', $this->table. ".*")
						->join('product_types','product_types.product_type_id','=', 
							$this->table. '.product_type_id')
						->where([
                    			'product_types.is_deleted' => 0,
                    			'products.is_deleted' => 0,
                    			'product_types.product_type_name' => 'Bưởi'
                		])->orderBy('created_date', 'des')
                ->get();

        return $data;   
	}

	public function showCam(){
		$data = Product::select('product_types.product_type_id', $this->table. ".*")
						->join('product_types','product_types.product_type_id','=', 
							$this->table. '.product_type_id')
						->where([
                    			'product_types.is_deleted' => 0,
                    			'products.is_deleted' => 0,
                    			'product_types.product_type_name' => 'Cam'
                		])->orderBy('created_date', 'des')
                ->get();

        return $data;   
	}

	public function getProductByTypeId($id){
		$data = Product::select($this->table. ".*")
				->where([
					'products.is_deleted' => 0,
					'products.product_type_id' => $id
				])->orderBy('created_date', 'des')
				->get();

		return $data;
	}

	public function showProduct(){
		$data = Product::select('product_types.product_type_id', $this->table. ".*")
					->join('product_types','product_types.product_type_id','=', 
							$this->table. '.product_type_id')
					->where([
                    		'product_types.is_deleted' => 0,
                    		'products.is_deleted' => 0,
                		])->orderBy('created_date', 'des')
					->limit(10)
                	->get();

        return $data;   
	}
}