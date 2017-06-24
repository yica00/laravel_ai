<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Scalp_orderRequest extends FormRequest
{
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
        return [
            'jd_account_id'=>'required|integer|digits_between:1,10',
            'ip'=>'max:16',
            'ip_location'=>'max:30',
            'goods_id'=>'required|integer|digits_between:1,10',
            'evaluate_id'=>'integer|digits_between:1,10|nullable',
            'evaluate'=>'max:100',
            'query_time'=>'date|nullable',
            'has_evaluate'=>'in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'jd_account_id.required'=>'京东id必须填写',
            'jd_account_id.integer'=>'京东id必须是整数',
            'jd_account_id.digits_between'=>'京东id在1到10位之间',
            'ip.max'=>'ip最多16字符',
            'ip_location.max'=>'ip地址最多30字符',
            'goods_id.required'=>'商品id必须填写',
            'goods_id.integer'=>'商品id必须是整数',
            'goods_id.digits_between'=>'商品id在1到10位之间',
            'evaluate_id.integer'=>'评价id必须是整数',
            'evaluate_id.digits_between'=>'评价id在1到10位之间',
            'has_evaluate.in'=>'是否有评价必须是正确的数字',
            'evaluate.max'=>'评价内容最多100自字符',
            'query_time.date'=>'确认收货时间必须是日期',
        ];
    }
}
