<?php

namespace Modules\Inside\Http\Models;

use App\MyCore\DbTable;
use Modules\Inside\Http\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\Model;

class Category extends DbTable {

    public $primaryKey = 'category_id';

    public function __construct($options = array()) {
        parent::__construct($options);
        $this->table = 'categories';

        $this->params = \Request::all();
    }

    public function showAll() {
        $select = Category::where('is_deleted', 0)
                ->get();

        return $select;
    }

    public function getCategory() {
        return Category::select()
            ->where('is_deleted', '=', 0)->get();
    }

    public function add(CategoryRequest $request){
        $object = new Category();

        $data = $this->_formatDataToSave($request->all());

        $this->filterColumns($data, $object);

        $object->save();

        $id = $object->{$object->primaryKey};

        return $id;
    }

    public function edit($id, CategoryRequest $request){
        $object = $this->findOrNew($id);
        $data = $this->_formatDataToSave($request->all());

        $this->filterColumns($data, $object);

        $object->save();

        return $id;
    }

    private function _formatDataToSave($data) {
        if (isset($data['_token'])) {
            unset($data['_token']);
        }
        return $data;
    }

    

}
