<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //定义模型关联的数据表 文章表
    protected $table = 'article';
    //定义主键
    protected $primaryKey = 'id';
    //定义禁止操作时间
    public $timestamps = false;
    //定义允许写入的数据字段
    protected $fillable = ['id', 'title','author','outline', 
    'content','html','sort','tag','created_at', 'updated_at'];

    /**字段说明
     * ID
     * 标题
     * 内容
     * 类别
     * 标签
     * 更新时间
     * 
     */
}
