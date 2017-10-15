<?php
namespace app\admin\validate;

use think\Validate;

class Sale extends Validate{
    protected $rule = [
        'author'  => 'require|max:25',
        'tel'   => 'require',
        'price' => 'require',
        'title' => 'require',
        'type' => 'require',
        'content' => 'require',
        'logo' => 'string',
    ];

    protected $message = [
        'author' => '租/售 人姓名不能为空',
        'tel' => '请正确添加11位手机号码,以便联系',
        'title' => '标题不能为空',
        'price' => '价格不能为空',
        'content' => '内容不能为空',
        'type' => '类型不能为空',
        'logo' => '图片类型不正确',
    ];

}