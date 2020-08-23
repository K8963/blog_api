<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use JWTAuth;
use JWTFactory;

class LoginControler extends Controller
{
    //登录验证
    public function login(Request $request)
    {
        $v_name = $request->name; //接收到的用户名
        $v_passwd = $request->password; //接收到的用户密码
        //MD5用户密码
        $v_pwd = md5($v_passwd);
        //实例化模型，将表和类映射起来
        $model = new User();
        //查询一条账号 [等于] 接收参数 [并且] 密码也 [等于] 接收参数的数据
        $data = $model->where('name', $v_name)->where('password', $v_pwd)->first();
        //判断查询数据是否为空
        if ($data == null) {
            //调用自定义响应返回函数获取返回信息
            $res = $this->_tips(204, '账号密码错误');
        } else {
            $token = JWTAuth::fromUser($data);
            //返回用户信息数据
            $info = [
                'id' => $data->id, //id
                'name' => $data->name, //用户名
                'lasttime' => $data->last_login_time, //上次登录时间
                'token' => $token,
            ];
            //调用自定义响应返回函数获取返回信息
            $res = $this->_tips(200, '登录成功', $info, $token);
            //获取当前时间
            $time = date('Y-n-d H:i:s');
            //更新用户登录时间
            $model->where('id', '=', $data->id)->update(['last_login_time' => $time]);
        }
        //返回json数据类型数据
        return response($res);
    }

    /**
     * 用户操作验证
     * @param string $name 用户账号
     * @param string $password 用户密码
     * @return bool
     */
    public function check($name, $password)
    {
        //MD5用户密码
        $v_pwd = md5($password);
        //实例化模型，将表和类映射起来
        $model = new User();
        //查询一条账号 [等于] 接收参数 [并且] 密码也 [等于] 接收参数的数据
        $data = $model->where('name', $name)->where('password', $v_pwd)->first();
        //判断查询数据是否为空
        if ($data == null) {
            //验证成功
            $res = false;
        } else {
            //验证
            $res = true;
        }
        return $res;
    }
}
