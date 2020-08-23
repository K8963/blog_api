<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// tag标签
use App\Admin\Tag;

class Tagcontroller extends Controller
{
  //文章标签列表查询、筛选接口
  public function taglist(Request $request)
  {
    $tagname = $request->tag; //分类名

    //实例化模型，将表和类映射起来
    $model = new Tag();

    //判断标签名是否不为空，为空则跳过
    if (!empty($tagname)) {
      //查询条件处理，查询分类名是否匹配
      $model = $model->where('tag_name', $tagname);
    }

    //查询所有数据
    $data = $model->get();
    //判断查询数据是否为空
    if ($data == null) {
      //空数据返回
      return response($this->_tips(204, '查询数据为空'));
    } else {
      //成功返回
      return response($this->_tips(200, '查询成功', $data));
    }
  }

  //文章标签添加
  public function tagadd(Request $request)
  {
    if ($request !== '') {
      $tag_name = $request->tag; //内容
      //实例化模型，将表和类映射起来
      $model = new Tag();
      $v1 = $model->where('tag_name', $tag_name)->first();
      //判断添加内容是否已经存在
      if ($v1 == null) {
        $model->tag_name = $tag_name; //添加内容
        $model->created_at = date('Y-n-d H:i:s', time()); //添加时间
        //新增数据提交
        $result = $model->save();
        //判断添加是否成功
        if ($result) {
          //成功返回
          return response($this->_tips(200, '添加成功'));
        } else {
          //失败返回
          return response($this->_tips(204, '添加失败'));
        }
      } else {
        //重复返回
        return response($this->_tips(204, '分类已存在'));
      }
    }
  }

  //文章标签删除
  public function tagdel(Request $request)
  {
    if ($request !== '') {
      $id = $request->id; //接收到ID
      //实例化模型，将表和类映射起来
      $model = new Tag();
      //获取待操作对应记录
      $update = $model->find($id);
      if ($update == null) {
        //异常返回
        return response($this->_tips(200, '删除数据不存在'));
      } else {
        //删除待操作记录
        $result = $update->delete();
        if ($result) {
          //成功返回
          return response($this->_tips(200, '删除成功'));
        } else {
          //失败返回
          return response($this->_tips(204, '删除失败'));
        }
      }
    }
  }

  //文章标签修改
  public function tagedit(Request $request)
  {
    if ($request !== '') {
      $id = $request->id; //接收到ID
      $tag_name = $request->tag; //接收到修改内容
      //实例化模型，将表和类映射起来
      $model = new Tag();
      //获取待操作对应记录
      $update = $model->find($id);
      //判断数据是否为空
      if ($update == null) {
        //空数据返回
        return response($this->_tips(204, '修改数据不存在'));
      } else {
        //如果修改内容为发生改变则跳过
        if ($update->tag_name != $tag_name) {
          $update->tag_name = $tag_name; //分类名
        } else {
          //异常返回
          return response($this->_tips(204, '分类已存在'));
        }
        //将实例映射到记录
        $result = $update->save();
        if ($result) {
          //成功返回
          return response($this->_tips(200, '修改成功'));
        } else {
          //失败返回
          return response($this->_tips(204, '修改失败'));
        }
      }
    }
  }
}
