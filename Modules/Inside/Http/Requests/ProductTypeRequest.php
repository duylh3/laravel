<?php
namespace Modules\Inside\Http\Requests;


class ProductTypeRequest extends Request
{
    private $_languages = array();

    public function __construct()
    {
        $this->_languages = json_decode(LANGUAGES);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $data = array();
        $data["product_type_name"] = 'required';

        return $data;
    }

    public function messages()
    {
        $data = array();
        $data["product_type_name.required"] = 'Vui lòng nhập loại sản phẩm';

        return $data;
    }
}