<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Admin\Article;


class ArticleController extends Controller
{
  //文章列表
  public function articlelist(Request $request)
  {
    $id = $request->id; //文章id
    $title = $request->title; //标题
    $sort = $request->sort; //文章分类
    $tag = $request->tag; //文章标签
    $dateY = $request->dateY; //发布时间，年
    $dateM = $request->dateM; //发布时间，月


    //实例化模型，将表和类映射起来
    $model = new Article();
    //判断文章ID否不为空，为空则跳过
    if (!empty($id)) {
      //查询条件处理，查询文章id是否匹配
      $model = $model->where('id', $id);
    }
    //判断文章标题否不为空，为空则跳过
    if (!empty($title)) {
      //查询条件处理，查询文章标题是否匹配
      $model = $model->where('title', 'like', '%' . $title . '%'); //链表模糊查询
    }
    //判断文章分类是否不为空，为空则跳过
    if (!empty($sort)) {
      //查询条件处理，查询文章分类是否匹配
      $model = $model->where('sort', $sort);
    }
    //判断文章标签否不为空，为空则跳过
    if (!empty($tag)) {
      //查询条件处理，查询文章分类是否匹配
      $model = $model->where('tag', 'like', '%' . $tag . '%');
    }
    //判断文章发布时间否不为空，为空则跳过
    if (!empty($dateY) && empty($dateM)) {
      $model = $model->whereYear('created_at', '=', $dateY);
    }
    if (empty($dateY) && !empty($dateM)) {
      $model = $model->whereMonth('created_at', '=', $dateM);
    }
    if (!empty($dateY) && !empty($dateM)) {
      $model = $model->whereYear('created_at', '=', $dateY)->whereMonth('created_at', '=', $dateM);
    }
    //查询所有数据
    $data = $model->get();
    //判断查询数据是否为空
    if (empty($data)) {
      return response($this->_tips(204, '查询数据为空'));
    } else {
      return response($this->_tips(200, '查询数据成功', $data));
    }
  }

  //文章删除
  public function articledel(Request $request)
  {
    if ($request !== '') {
      $id = $request->id; //文章ID

      //实例化模型，将表和类映射起来
      $model = new Article();

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

  //文章编辑
  public function articleedit(Request $request)
  {
    if ($request !== '') {
      $id = $request->id; //ID
      $updated_at = date("Y-m-d H:i:s"); //发布时间

      //实例化模型，将表和类映射起来
      $model = new Article();
      //获取待修改数据
      $update = $model->find($id);

      $update->title = $request->title; //文章名称
      $update->author = $request->author; //作者
      $update->outline = $request->outline; //概要
      $update->content = $request->content; //md内容
      $update->html = $request->html; //html内容
      $update->sort = $request->sort; //类别
      $update->tag = $request->tag; //标签
      $update->updated_at = $updated_at; //发布时间

      //新增数据提交
      $result = $update->save();

      if ($result) {
        return response($this->_tips(200, '修改成功'));
      } else {
        return response($this->_tips(204, '修改失败'));
      }
    }
  }

  //文章添加
  public function articleadd(Request $request)
  {
    // dd($request);
    if ($request !== '') {
      $created_at = date("Y-m-d H:i:s"); //发布时间
      //实例化模型，将表和类映射起来
      $model = new Article();

      $model->title = $request->title; //文章名称
      $model->author = $request->author; //作者
      $model->outline = $request->outline; //概要
      $model->content = $request->content; //md内容
      $model->html = $request->html; //html内容
      $model->sort = $request->sort; //类别
      $model->tag = $request->tag; //标签
      $model->created_at = $created_at; //发布时间

      //新增数据提交
      $result = $model->save();
      if ($result) {
        return response($this->_tips(200, '保存成功'));
      } else {
        return response($this->_tips(204, '保存失败'));
      }
    }
  }
}
