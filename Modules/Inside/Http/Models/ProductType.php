<?php
namespace Modules\Inside\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\MyCore\DbTable;
use Modules\Inside\Http\Requests\ProductTypeRequest;

class ProductType extends DbTable {

	public $primaryKey = 'product_type_id';

	public function __construct($options = array()){
			parent::__construct($options);
			$this->table = 'product_types';

			$this->params = \Request::all();
	}

	public function showAll(){
		$data = ProductType::select($this->table. '.*')
							-> where ([
								'product_types.is_deleted' => 0,	
							]);
		return $this->generateSelect($data);
	}

	public function add(ProductTypeRequest $request){
		$object = new ProductType();
		
		$data = $request->all();
		$data = $this->_formatDataToSave($data);

        $this->filterColumns($data, $object);
        $object->save();

        $id = $object->{$object->primaryKey};

        return $id;
	}

	public function getProductTypes() {
        return ProductType::select()
            ->where('is_deleted', '=', 0)->get();
    }

    private function _formatDataToSave($data)
    {
        if (isset($data['_token']))
            unset($data['_token']);
        return $data;
    }

}

