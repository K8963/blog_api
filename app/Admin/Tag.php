<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //定义模型关联的数据表 用户表
    protected $table = 'tag';
    //定义主键
    protected $primaryKey = 'id';
    //定义允许写入的数据字段
    protected $fillable =['id','tag_name'];
    /*
     *  字段说明：标签名
     * */
}
