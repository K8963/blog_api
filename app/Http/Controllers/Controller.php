<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 响应返回数据
     * @param string $code 响应状态码
     * @param string $msg 响应提示
     * @param array $data 返回数据
     * @param string $v1 临时数据名
     * @param array $v 临时数据
     */
    public function _tips($code = '200', $msg = '', $data = [], $v1 = '', $v = [])
    {
        //自定义响应状态码
        $res['code'] = $code;
        //响应提示
        $res['msg'] = $msg;
        //返回数据
        $res['data'] = $data;
        //补充数据
        if ($v1 != '' && !empty($v)) {
            $res[$v1] = $v;
        }
        return $res;
    }
}
