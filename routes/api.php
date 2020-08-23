<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use Illuminate\Support\Facades\Route;

/*允许外来者跨域操作*/

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
// header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型
Route::prefix('/')->group(function () {
  //验证登录信息接口
  Route::any('login', 'Auth\LoginControler@login');

  //文章列表查询筛选列表
  Route::any('article/list', 'Admin\ArticleController@articlelist');
  //文章删除接口
  Route::any('article/del', 'Admin\ArticleController@articledel');
  //文章添加接口
  Route::post('article/add', 'Admin\ArticleController@articleadd');
  //文章修改接口
  Route::post('article/edit', 'Admin\ArticleController@articleedit');



  //文章分类列表查询筛选接口
  Route::get('sort/list', 'Admin\SortController@sortlist');
  //文章分类编辑修改接口
  Route::any('sort/edit', 'Admin\SortController@sortedit');
  //文章分类添加接口
  Route::post('sort/add', 'Admin\SortController@sortadd');
  //文章分类删除接口
  Route::any('sort/del', 'Admin\SortController@sortdel');

  //文章标签列表查询筛选接口
  Route::get('tag/list', 'Admin\TagController@taglist');
  //文章标签添加接口
  Route::post('tag/add', 'Admin\TagController@tagadd');
  //文章标签删除接口
  Route::any('tag/del', 'Admin\TagController@tagdel');
  //文章标签编辑修改接口
  Route::any('tag/edit', 'Admin\TagController@tagedit');
});
