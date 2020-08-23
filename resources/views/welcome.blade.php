<!--/**
 *	Entry name：项目名称
 *	Description：项目说明
 *	Author：ZERO-ART
 *	Author Url：http://www.lykep.com
 * 	Contact：708298599  656001878
 *	2019-09-24 14:58:59
 */-->
<!doctype html>
<html lang="zh">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>API接口调用文档</title>
  <link href="/layui/other/css/site.min.css" rel="stylesheet">
  <link href="/layui/other/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/layui/other/css/layui.css">
  <link href="/layui/other/css/oneui.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <script src="https://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="/layui/layui.all.js"></script>

</head>

<body>
  <header class="site-header">
    <nav class="nav_jsxs">
      <span style="float: left;"><a class="logo_jsxs" href=""></a></span>
      <a href="./">首页</a>
    </nav>
    <div class="box-text">
      <h1>API接口调用文档</h1>
      <p> <br><span class="package-amount">当前共 <strong id="v-num">1</strong> 个接口</span>
      </p>
    </div>
  </header>
  <style>
    .url {
      word-break: break-all;
      cursor: pointer;
      margin-left: 5px;
      color: #777;
      border: none;
      border-radius: 0;
      border-bottom: 2px solid #5FB878;
    }

    .simpleTable {
      line-height: 20px;
      padding-bottom: 16px;
    }

    .linep {
      font-size: 14px;
      font-weight: 700;
      color: #555;
      padding-left: 14px;
      height: 16px;
      line-height: 16px;
      margin-bottom: 18px;
      position: relative;
      margin-top: 15px;
    }

    .linep:before {
      content: '';
      width: 4px;
      height: 16px;
      background: #00aeff;
      border-radius: 2px;
      position: absolute;
      left: 0;
      top: 0;
    }

    ::-webkit-scrollbar {
      width: 9px;
      height: 9px;
    }

    ::-webkit-scrollbar-track-piece {
      background-color: #ebebeb;
      -webkit-border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:vertical {
      height: 32px;
      background-color: #ccc;
      -webkit-border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:horizontal {
      width: 32px;
      background-color: #ccc;
      -webkit-border-radius: 4px;
    }
  </style>
  <!-- 登录接口 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">登录验证接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/login">api/login</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>

          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>name</th>
                <th>必填</th>
                <th>string</th>
                <th>用户名</th>
              </tr>
              <tr>
                <th>passwd</th>
                <th>必填</th>
                <th>string</th>
                <th>用户密码</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>
              <tr>
                <th>data->id</th>
                <th>string</th>
                <th>ID</th>
              </tr>
              <tr>
                <th>data->name</th>
                <th>string</th>
                <th>name</th>
              </tr>
              <tr>
                <th>data->lasttime</th>
                <th>string</th>
                <th>上次登录时间</th>
              </tr>
              <tr>
                <th>data->token</th>
                <th>string</th>
                <th>token</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code": 200,
    "msg": "登录成功",
    "data": {
        "id": 1,
        "name": "admin",
        "lasttime": "2020-08-15 15:50:35",
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sYXJhdmVsLmFwaVwvYXBpXC9sb2dpbiIsImlhdCI6MTU5NzQ3OTQwNSwiZXhwIjoxNTk3NDgzMDA1LCJuYmYiOjE1OTc0Nzk0MDUsImp0aSI6InpWUE1ZYjBVNU1jOFkxcFkiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ._pwUmwmq4qj_Yyc9cKAagYLAjczgASAYvTL4-kYcPhA"
    }
}</pre>
        </div>

      </div>
    </div>
  </div>
  <!-- 文章列表 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章列表接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/article/list">api/article/list</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="GET">GET</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>title</th>
                <th>可选</th>
                <th>string</th>
                <th>文章标题</th>
              </tr>
              <tr>
                <th>sort</th>
                <th>可选</th>
                <th>string</th>
                <th>分类名称</th>
              </tr>
              <tr>
                <th>tag</th>
                <th>可选</th>
                <th>string</th>
                <th>标题名称</th>
              </tr>
              <tr>
                <th>dateY</th>
                <th>可选</th>
                <th>string</th>
                <th>发布时间 - 年</th>
              </tr>
              <tr>
                <th>dateM</th>
                <th>可选</th>
                <th>string</th>
                <th>发布时间 - 月</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>
              <tr>
                <th>data->id</th>
                <th>string</th>
                <th>文章ID</th>
              </tr>
              <tr>
                <th>data->title</th>
                <th>string</th>
                <th>文章标题</th>
              </tr>
              <tr>
                <th>data->author</th>
                <th>string</th>
                <th>文章作者</th>
              </tr>
              <tr>
                <th>data->content</th>
                <th>string</th>
                <th>文章内容md</th>
              </tr>
              <tr>
                <th>data->html</th>
                <th>string</th>
                <th>文章内容html</th>
              </tr>
              <tr>
                <th>data->sort</th>
                <th>string</th>
                <th>文章分类</th>
              </tr>
              <tr>
                <th>data->tag</th>
                <th>string</th>
                <th>文章标签</th>
              </tr>
              <tr>
                <th>data->up_data</th>
                <th>string</th>
                <th>更新时间</th>
              </tr>
              <tr>
                <th>data->created_data</th>
                <th>string</th>
                <th>发布时间</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code": 200,
    "msg": "查询数据成功",
    "data": [
        {
            "id": 1,
            "title": "Vue3 插件开发详解尝鲜版",
            "author": "8963",
            "content": "vue3.0-beta 版本已经发布了一段时间了\r\n\r\n ",
            "html": "< p >vue3.0-beta 版本已经发布了一段时间了< / p>",
            "sort": "前端",
            "tag": "Javascript",
            "up_data": null,
            "created_data": "2019-08-12 11:47:25"
        }
    ]
}</pre>
        </div>

      </div>
    </div>
  </div>
  <!-- 文章添加 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章添加接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/article/add">api/article/add</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>title</th>
                <th>必填</th>
                <th>string</th>
                <th>文章标题</th>
              </tr>
              <tr>
                  <th>outline</th>
                  <th>必填</th>
                  <th>string</th>
                  <th>概要</th>
              </tr>
              <tr>
                <th>author</th>
                <th>必填</th>
                <th>string</th>
                <th>作者</th>
              </tr>
              <tr>
                <th>content</th>
                <th>必填</th>
                <th>string</th>
                <th>文章内容md</th>
              </tr>
              <tr>
                <th>html</th>
                <th>必填</th>
                <th>string</th>
                <th>文章内容html</th>
              </tr>
              <tr>
                <th>sort</th>
                <th>必填</th>
                <th>string</th>
                <th>文章分类</th>
              </tr>
              <tr>
                <th>tag</th>
                <th>必填</th>
                <th>string</th>
                <th>文章标签</th>
              </tr>
            </tbody>

          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>

            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"保存成功",
    "data":{

    }
}</pre>
        </div>

      </div>
    </div>
  </div>
  <!-- 文章删除 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章删除接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/article/del">api/article/del</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>id</th>
                <th>必填</th>
                <th>string</th>
                <th>文章ID</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"删除成功",
    "data":[

    ]
}</pre>
        </div>
      </div>
    </div>
  </div>
  <!-- 文章编辑 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章编辑接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/article/edit">api/article/edit</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>title</th>
                <th>必填</th>
                <th>string</th>
                <th>文章标题</th>
              </tr>
              <tr>
                <th>author</th>
                <th>必填</th>
                <th>string</th>
                <th>作者</th>
              </tr>
              <tr>
                <th>content</th>
                <th>必填</th>
                <th>string</th>
                <th>文章内容md</th>
              </tr>
              <tr>
                <th>html</th>
                <th>必填</th>
                <th>string</th>
                <th>文章内容html</th>
              </tr>
              <tr>
                <th>sort</th>
                <th>必填</th>
                <th>string</th>
                <th>文章分类</th>
              </tr>
              <tr>
                <th>tag</th>
                <th>必填</th>
                <th>string</th>
                <th>文章标签</th>
              </tr>
            </tbody>

          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>

            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"修改成功",
    "data":{

    }
}</pre>
        </div>

      </div>
    </div>
  </div>

  <!-- 分类列表 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章分类列表接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/sort/list">api/sort/list</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="GET">GET</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>>
              <tr>
                <th>sort</th>
                <th>可选</th>
                <th>string</th>
                <th>分类名</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>
              <tr>
                <th>data->id</th>
                <th>string</th>
                <th>分类ID</th>
              </tr>
              <tr>
                <th>data->sortname</th>
                <th>string</th>
                <th>分类名称</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code": 200,
    "msg": "查询成功",
    "data": [
     {
        "id": 1,
        "sortname": "java1"
        },
        {
            "id": 2,
            "sortname": "后端"
        },
        {
            "id": 3,
            "sortname": "服务端"
        }
    ]
}</pre>
        </div>
      </div>
    </div>
  </div>
  <!-- 分类添加 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章分类添加接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/sort/add">api/sort/add</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>sort</th>
                <th>必填</th>
                <th>string</th>
                <th>添加内容</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>

            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"添加成功",
    "data":[

    ]
}</pre>
        </div>

      </div>
    </div>
  </div>
  <!-- 分类删除 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章分类删除接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/sort/del">api/sort/del</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>id</th>
                <th>必填</th>
                <th>string</th>
                <th>分类ID</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>

            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"删除成功",
    "data":[

    ]
}</pre>
        </div>

      </div>
    </div>
  </div>
  <!-- 分类编辑 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章分类编辑接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/sort/edit">api/sort/edit</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>id</th>
                <th>必填</th>
                <th>string</th>
                <th>分类ID</th>
              </tr>
              <tr>
                <th>sort</th>
                <th>必填</th>
                <th>string</th>
                <th>修改内容</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>

            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"修改成功",
    "data":[

    ]
}</pre>
        </div>

      </div>
    </div>
  </div>

  <!-- 标签列表 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章标签列表接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/tag/list">api/tag/list</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="GET">GET</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>tag</th>
                <th>可选</th>
                <th>string</th>
                <th>分类名</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>
              <tr>
                <th>data->id</th>
                <th>string</th>
                <th>标签ID</th>
              </tr>
              <tr>
                <th>data->tagname</th>
                <th>string</th>
                <th>标签名称</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code": 200,
    "msg": "查询成功",
    "data": [
        {
            "id": 1,
            "tagname": "前端"
        }
    ]
}</pre>
        </div>
      </div>
    </div>
  </div>
  <!-- 标签添加 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章标签添加接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/tag/add">api/tag/add</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>tag</th>
                <th>必填</th>
                <th>string</th>
                <th>添加内容</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>

            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"添加成功",
    "data":[

    ]
}</pre>
        </div>

      </div>
    </div>
  </div>
  <!-- 标签删除 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章标签删除接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/tag/del">api/tag/del</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>id</th>
                <th>必填</th>
                <th>string</th>
                <th>标签ID</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>

            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"删除成功",
    "data":[

    ]
}</pre>
        </div>

      </div>
    </div>
  </div>
  <!-- 标签编辑 -->
  <div class="layui-container" style="margin-top: 15px;">
    <div class="layui-row">
      <blockquote class="layui-elem-quote">文章标签编辑接口</blockquote>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">

      <div class="layui-tab-content">
        <div class="layui-tab-item layui-show">
          <p class="simpleTable">
            <span class="layui-badge layui-bg-black">接口地址：</span>
            <span class="url" data-clipboard-text="api/tag/edit">api/tag/edit</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge layui-bg-green">返回格式：</span>
            <span class="url" data-clipboard-text="JSON">JSON</span>
          </p>
          <p class="simpleTable">
            <span class="layui-badge">请求方式：</span>
            <span class="url" data-clipboard-text="POST">POST</span>
          </p>
          <p class="linep">请求参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>必填</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>id</th>
                <th>必填</th>
                <th>string</th>
                <th>标签ID</th>
              </tr>
              <tr>
                <th>tag</th>
                <th>必填</th>
                <th>string</th>
                <th>修改内容</th>
              </tr>
            </tbody>
          </table>
          <p class="linep">返回参数说明：</p>
          <table class="layui-table" lay-size="sm">
            <thead>
              <tr>
                <th>名称</th>
                <th>类型</th>
                <th>说明</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>code</th>
                <th>string</th>
                <th>自定义状态码</th>
              </tr>
              <tr>
                <th>msg</th>
                <th>string</th>
                <th>提示消息</th>
              </tr>
              <tr>
                <th>data</th>
                <th>array</th>
                <th>响应数据</th>
              </tr>

            </tbody>
          </table>
          <p class="linep">返回示例：</p>
          <pre class="layui-code">{
    "code":200,
    "msg":"修改成功",
    "data":[

    ]
}</pre>
        </div>

      </div>
    </div>
  </div>


  <script src="/layui/other/js/clipboard.min.js"></script>
  <script>
    layui.use('code', function() { //加载code模块
      layui.code(); //引用code方法
    });
    var clipboard = new ClipboardJS('.url');
    clipboard.on('success', function(e) {
      layer.msg('复制成功!');
    });
    clipboard.on('error', function(e) {
      layer.msg('复制成功!');
    });
  </script>

  <style>
    #footer h4 {
      margin-bottom: 15px;
    }

    .pul-box {
      position: fixed;
      width: 220px;
      /* background: #ccc; */
      height: 600px;
      left: 30px;
      top: 230px;
    }

    .go-top,
    .go-top a {
      position: fixed;
      bottom: 35px;
      right: 35px;
      height: 45px;
      width: 45px;
      background: #5FB878;
      text-align: center;
      line-height: 45px;
      color: #fff;
      border-radius: 50%;
    }

    #navlist {
      overflow: auto;
      height: 600px;
    }

    #navlist li {
      padding: 15px;
    }
  </style>

  <div class="pul-box">
    <ul id="navlist"></ul>
  </div>
  <div class="go-top">
    <a href="javascript:$('html ').animate( {scrollTop: 0}, 300);">TOP</a>
  </div>
  <footer id="footer" class="footer hidden-print">


  </footer>
  <script type="text/javascript" src="/layui/other/js/20354947.js"></script>
  <script>
    //获取出现次数
    var num = document.getElementsByClassName('layui-container');
    //输出到指定位置
    document.getElementById('v-num').innerHTML = num.length;

    // 获取标题数
    var navnum = document.getElementsByClassName('layui-elem-quote');

    //
    var n_li = '';
    //循环标题
    for (let index = 0; index < navnum.length; index++) {
      n_li = n_li + '<li><a href="javascript:GoPage(' + index + ');">' + navnum[index].innerText + '</a></li>';
    }
    //输出标题到指定地点
    document.getElementById('navlist').innerHTML = n_li;


    // 跳转到指定位置
    function GoPage(i) {
      var gd = 0;
      for (let index = 0; index < i; index++) {
        //盒子高度
        var item = document.getElementsByClassName('layui-container')[index].scrollHeight;
        //高度叠加
        gd = gd + item;
      }
      //高度
      var scrollHeight = gd;
      //跳到高度
      $('html').animate({
        scrollTop: scrollHeight
      }, 500);
    }
  </script>
</body>

</html>
