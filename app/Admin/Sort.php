<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Sort extends Model
{
    //定义模型关联的数据表 用户表
    protected $table = 'sort';
    //定义主键
    protected $primaryKey = 'id';
    //定义允许写入的数据字段
    protected $fillable =['id','sort_name'];
    /*
     *  字段说明：类别名
     * */
}
