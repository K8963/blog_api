<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// sort分类
use App\Admin\Sort;

class SortController extends Controller
{
  //文章分类列表
  public function sortlist(Request $request)
  {
    $sortname = $request->sort; //分类名

    //实例化模型，将表和类映射起来
    $model = new Sort();

    //判断分类名是否不为空，为空则跳过
    if (!empty($sortname)) {
      //查询条件处理，查询分类名是否匹配
      $model = $model->where('sort_name', 'like', '%' . $sortname . '%'); //链表模糊查询
    }

    //查询所有数据
    $data = $model->get();
    //判断查询数据是否为空
    if ($data == null) {
      //空数据返回
      return response($this->_tips(204, '查询数据为空'));
    } else {
      //数据处理
      //成功返回
      return response($this->_tips(200, '查询成功', $data));
    }
  }

  //文章分类添加
  public function sortadd(Request $request)
  {
    if ($request !== '') {
      $sort_name = $request->sort; //内容
      //实例化模型，将表和类映射起来
      $model = new Sort();
      $data = $model->where('sort_name', $sort_name)->first();
      //判断添加内容是否已经存在
      if ($data == null) {
        $model->sort_name = $sort_name; //添加内容
        $model->created_at = date('Y-n-d H:i:s', time()); //添加时间
        //新增数据提交
        $result = $model->save();
        //判断添加是否成功
        if ($result) {
          //成功返回
          return response($this->_tips(200, '添加成功', $data));
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

  //文章分类删除
  public function sortdel(Request $request)
  {
    if ($request !== '') {
      $id = $request->id; //接收到ID
      //实例化模型，将表和类映射起来
      $model = new Sort();
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

  //文章分类修改
  public function sortedit(Request $request)
  {
    if ($request !== '') {
      $id = $request->id; //接收到ID
      $sort_name = $request->sort; //接收到修改内容
      //实例化模型，将表和类映射起来
      $model = new Sort();
      //获取待操作对应记录
      $update = $model->find($id);
      //判断数据是否为空
      if ($update == null) {
        //空数据返回
        return response($this->_tips(204, '修改数据不存在'));
      } else {
        //如果修改内容为发生改变则跳过
        if ($update->sort_name != $sort_name) {
          $update->sort_name = $sort_name; //分类名
          $model->update_at = date('Y-n-d H:i:s', time()); //更新时间
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
