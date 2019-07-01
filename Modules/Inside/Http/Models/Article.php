<?php
namespace Modules\Inside\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\MyCore\DbTable;
use Modules\Inside\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Article extends DbTable{

	public $primaryKey = 'article_id';

    public function __construct($options = array()) {
        parent::__construct($options);
        $this->table = 'articles';

        $this->params = \Request::all();
    }

    public function showAll(){
    	$data = Article::select('categories.category_name',$this->table . '.*')
            ->join('categories', 'categories.category_id', '=', $this->table . '.category_id')
            ->where([
            'categories.is_deleted' => 0,    
            'articles.is_deleted' => 0
        ]);
        return $this->generateSelect($data);
    }

    public function add(ArticleRequest $request){

        $object = new Article();

        $dataImage = $request->file('image');

        $this->saveImage($dataImage);

        $data = $this->_formatDataToSave($request->all());

        $this->filterColumns($data, $object);

        $object['article_image'] = time() . '.' . $dataImage->getClientOriginalExtension();

        $object->save();

        $id = $object->{$object->primaryKey};

        return $id;
    }

    public function edit($id, ArticleRequest $request) {
        $object = $this->findOrNew($id);

        $data = $this->_formatDataToSave($request->all());
        $this->filterColumns($data, $object);

        if ($request->file('image')) {
            $dataImage = $request->file('image');
            $this->saveImage($dataImage);
            $object['article_image'] = time() . '.' . $dataImage->getClientOriginalExtension();
        }
        $object->save();

        return $id;
    }

    private function _formatDataToSave($data) {
        if (isset($data['_token'])) {
            unset($data['_token']);
        }
        return $data;
    }

    private function saveImage($image) {

        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename() . '.' . $extension, File::get($image));

        $name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/upload/');
        $imagePath = $destinationPath . "/" . $name;
        $image->move($destinationPath, $name);
    }
}

?>