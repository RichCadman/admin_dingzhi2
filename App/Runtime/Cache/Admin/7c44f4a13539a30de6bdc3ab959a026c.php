<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>素材火www.sucaihuo.com - 日期选择器layer</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/Pub/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Pub/admin//font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Pub/admin/css/animate.css" rel="stylesheet">
    <link href="/Pub/admin/css/animate.css" rel="stylesheet">
    <link href="/Pub/admin/css/style.css" rel="stylesheet">
</head>

<body>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">

                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="/Pub/admin/img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Beaut-zihan</strong>
                             </span>  <span class="text-muted text-xs block">超级管理员 <b class="caret"></b></span> </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="form_avatar.html">修改头像</a>
                            </li>
                            <li><a href="profile.html">个人资料</a>
                            </li>
                            <li><a href="contacts.html">联系我们</a>
                            </li>
                            <li><a href="mailbox.html">信箱</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html">安全退出</a>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        H+
                    </div>

                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">主页</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="index_1.html">主页示例一</a>
                        </li>
                        <li><a href="index_2.html">主页示例二</a>
                        </li>
                        <li><a href="index_3.html">主页示例三</a>
                        </li>
                        <li><a href="index_4.html">主页示例四</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="layouts.html"><i class="fa fa-columns"></i> <span class="nav-label">布局</span><span class="label label-danger pull-right">2.0</span></a>
                </li>
                <li>
                    <a href="index.html#"><i class="fa fa fa-globe"></i> <span class="nav-label">v2.0新增</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="toastr_notifications.html">Toastr通知</a>
                        </li>
                        <li><a href="nestable_list.html">嵌套列表</a>
                        </li>
                        <li><a href="timeline_v2.html">时间轴</a>
                        </li>
                        <li><a href="forum_main.html">论坛</a>
                        </li>
                        <li><a href="code_editor.html">代码编辑器</a>
                        </li>
                        <li><a href="modal_window.html">模态窗口</a>
                        </li>
                        <li><a href="validation.html">表单验证</a>
                        </li>
                        <li><a href="tree_view_v2.html">树形视图</a>
                        </li>
                        <li><a href="chat_view.html">聊天窗口</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="index.html#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">图表</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="graph_echarts.html">百度ECharts</a>
                        </li>
                        <li><a href="graph_flot.html">Flot</a>
                        </li>
                        <li><a href="graph_morris.html">Morris.js</a>
                        </li>
                        <li><a href="graph_rickshaw.html">Rickshaw</a>
                        </li>
                        <li><a href="graph_peity.html">Peity</a>
                        </li>
                        <li><a href="graph_sparkline.html">Sparkline</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">信箱 </span><span class="label label-warning pull-right">16</span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="mailbox.html">收件箱</a>
                        </li>
                        <li><a href="mail_detail.html">查看邮件</a>
                        </li>
                        <li><a href="mail_compose.html">写信</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">小工具</span></a>
                </li>
                <li class="active">
                    <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">表单</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="form_basic.html">基本表单</a>
                        </li>
                        <li><a href="form_validate.html">表单验证</a>
                        </li>
                        <li><a href="form_advanced.html">高级插件</a>
                        </li>
                        <li><a href="form_wizard.html">步骤条</a>
                        </li>
                        <li><a href="form_webuploader.html">百度WebUploader</a>
                        </li>
                        <li><a href="form_file_upload.html">文件上传</a>
                        </li>
                        <li><a href="form_editors.html">富文本编辑器</a>
                        </li>
                        <li><a href="form_simditor.html">simditor</a>
                        </li>
                        <li><a href="form_avatar.html">头像裁剪上传</a>
                        </li>
                        <li class="active"><a href="layerdate.html">日期选择器layerDate</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.html#"><i class="fa fa-desktop"></i> <span class="nav-label">页面</span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="contacts.html">联系人</a>
                        </li>
                        <li><a href="profile.html">个人资料</a>
                        </li>
                        <li><a href="projects.html">项目</a>
                        </li>
                        <li><a href="project_detail.html">项目详情</a>
                        </li>
                        <li><a href="file_manager.html">文件管理器</a>
                        </li>
                        <li><a href="calendar.html">日历</a>
                        </li>
                        <li><a href="faq.html">帮助中心</a>
                        </li>
                        <li><a href="timeline.html">时间轴</a>
                        </li>
                        <li><a href="pin_board.html">标签墙</a>
                        </li>
                        <li><a href="invoice.html">单据</a>
                        </li>
                        <li><a href="login.html">登录</a>
                        </li>
                        <li><a href="register.html">注册</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.html#"><i class="fa fa-files-o"></i> <span class="nav-label">其他页面</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="search_results.html">搜索结果</a>
                        </li>
                        <li><a href="lockscreen.html">登录超时</a>
                        </li>
                        <li><a href="404.html">404页面</a>
                        </li>
                        <li><a href="500.html">500页面</a>
                        </li>
                        <li><a href="empty_page.html">空白页</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="index.html#"><i class="fa fa-flask"></i> <span class="nav-label">UI元素</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="typography.html">排版</a>
                        </li>
                        <li><a href="icons.html">字体图标</a>
                        </li>
                        <li><a href="iconfont.html">阿里巴巴矢量图标库</a>
                        </li>
                        <li><a href="draggable_panels.html">拖动面板</a>
                        </li>
                        <li><a href="buttons.html">按钮</a>
                        </li>
                        <li><a href="tabs_panels.html">选项卡 & 面板</a>
                        </li>
                        <li><a href="notifications.html">通知 & 提示</a>
                        </li>
                        <li><a href="badges_labels.html">徽章，标签，进度条</a>
                        </li>
                        <li><a href="layer.html">Web弹层组件layer</a>
                        </li>
                        <li><a href="tree_view.html">树形视图</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">栅格</span></a>
                </li>
                <li>
                    <a href="index.html#"><i class="fa fa-table"></i> <span class="nav-label">表格</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="table_basic.html">基本表格</a>
                        </li>
                        <li><a href="table_data_tables.html">数据表格(DataTables)</a>
                        </li>
                        <li><a href="table_jqgrid.html">jqGrid</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.html#"><i class="fa fa-picture-o"></i> <span class="nav-label">图库</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="basic_gallery.html">基本图库</a>
                        </li>
                        <li><a href="carousel.html">图片切换</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="index.html#"><i class="fa fa-sitemap"></i> <span class="nav-label">菜单 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="index.html#">三级菜单 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="index.html#">三级菜单 01</a>
                                </li>
                                <li>
                                    <a href="index.html#">三级菜单 01</a>
                                </li>
                                <li>
                                    <a href="index.html#">三级菜单 01</a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="index.html#">二级菜单</a>
                        </li>
                        <li>
                            <a href="index.html#">二级菜单</a>
                        </li>
                        <li>
                            <a href="index.html#">二级菜单</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="webim.html"><i class="fa fa-comments"></i> <span class="nav-label">即时通讯</span><span class="label label-danger pull-right">New</span></a>
                </li>
                <li>
                    <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>
                </li>
                <li>
                    <a href="index.html#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="form_builder.html">表单构建器</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="layerdate.html#"><i class="fa fa-bars"></i> </a>
                    <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                        <div class="form-group">
                            <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用H+后台主题</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="/Pub/admin/img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46小时前</small>
                                        <strong>小四</strong> 项目已处理完结
                                        <br>
                                        <small class="text-muted">3天前 2014.11.8</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="/Pub/admin/img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">25小时前</small>
                                        <strong>国民岳父</strong> 这是一条测试信息
                                        <br>
                                        <small class="text-muted">昨天</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i>  <strong> 查看所有消息</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                        <span class="pull-right text-muted small">4分钟前</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-qq fa-fw"></i> 3条新回复
                                        <span class="pull-right text-muted small">12分钟钱</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>查看所有 </strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> 退出
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>日期选择器layer</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">主页</a>
                    </li>
                    <li>
                        <a>UI元素</a>
                    </li>
                    <li>
                        <strong>日期选择器layer</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>layerDate简介</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="tabs_panels.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="tabs_panels.html#">选项1</a>
                                    </li>
                                    <li><a href="tabs_panels.html#">选项2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <p>你是时候换一款日期控件了，而layDate非常愿意和您成为工作伙伴。她致力于成为全球最用心的web日期支撑，为国内外所有从事web应用开发的同仁提供力所能及的动力。她基于原生JavaScript精心雕琢，兼容了包括IE6在内的所有主流浏览器。她具备优雅的内部代码，良好的性能体验，和完善的皮肤体系，并且完全开源，你可以任意获取开发版源代码，一扫某些传统日期控件的封闭与狭隘。layDate本着资源共享的开发者精神和对网页日历交互无穷的追求，延续了layui一贯的简单与易用。她遵循LGPL协议，您可以免费将她用于任何个人项目。</p>
                            <p>官网：<a href="http://sentsin.com/layui/laydate/" target="_blank">http://sentsin.com/layui/laydate/</a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>layerDate示例</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="tabs_panels.html#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="tabs_panels.html#">选项1</a>
                                            </li>
                                            <li><a href="tabs_panels.html#">选项2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">

                                    <form class="form-horizontal m-t">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">普通：</label>
                                            <div class="col-sm-10">
                                                <input class="form-control layer-date" placeholder="YYYY-MM-DD hh:mm:ss" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                                                <label class="laydate-icon">    </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">外部js调用：</label>
                                            <div class="col-sm-10">
                                                <input id="hello" class="laydate-icon form-control layer-date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">图标触发日期：</label>
                                            <div class="col-sm-10">
                                                <input readonly class="form-control layer-date" id="hello1">
                                                <label class="laydate-icon inline demoicon" onclick="laydate({elem: '#hello1'});"></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">图标触发日期：</label>
                                            <div class="col-sm-10">
                                                <input placeholder="开始日期" class="form-control layer-date" id="start">
                                                <input placeholder="结束日期" class="form-control layer-date" id="end">
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <p>日期选择器时，请给input添加<code>class="form-control layer-date"</code>，否则可能出现错位的情况。</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>layerDate API文档</h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="tabs_panels.html#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="tabs_panels.html#">选项1</a>
                                            </li>
                                            <li><a href="tabs_panels.html#">选项2</a>
                                            </li>
                                        </ul>
                                        <a class="close-link">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordion">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">
                                                        <span class="label label-info">1</span> <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseOne">核心方法：<code>aydate(options)</code></a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <p>options是一个对象，它包含了以下key: '默认值'</p>
                                                        <pre>
elem: '#id', //需显示日期的元素选择器
event: 'click', //触发事件
format: 'YYYY-MM-DD hh:mm:ss', //日期格式
istime: false, //是否开启时间选择
isclear: true, //是否显示清空
istoday: true, //是否显示今天
issure: true, 是否显示确认
festival: true //是否显示节日
min: '1900-01-01 00:00:00', //最小日期
max: '2099-12-31 23:59:59', //最大日期
start: '2014-6-15 23:00:00',    //开始日期
fixed: false, //是否固定在可视区域
zIndex: 99999999, //css z-index
choose: function(dates){ //选择好日期的回调

}</pre>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <span class="label label-info">2</span>
                                                        <a data-toggle="collapse" data-parent="#accordion" href="tabs_panels.html#collapseTwo">其它方法/属性</a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                            <pre>
laydate.v   //获取laydate版本号
laydate.skin(lib);  //加载皮肤，参数lib为皮肤名 

/*
    layer.now支持多类型参数。timestamp可以是前后若干天，也可以是一个时间戳。format为日期格式，为空时则采用默认的“-”分割。
    如laydate.now(-2)将返回前天，laydate.now(3999634079890)将返回2096-09-28
*/
layer.now(timestamp, format);   //该方法提供了丰富的功能，推荐灵活使用。

laydate.reset();    //重设日历控件坐标，一般用于页面dom结构改变时。无参</pre>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    By：<a href="http://www.zi-han.net" target="_blank">zihan's blog</a>
                </div>
                <div>
                    <strong>Copyright</strong> H+ &copy; 2014
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Mainly scripts -->
<script src="/Pub/admin/js/jquery-2.1.1.min.js"></script>
<script src="/Pub/admin/js/bootstrap.min.js"></script>
<script src="/Pub/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/Pub/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/Pub/admin/js/hplus.js"></script>
<script src="/Pub/admin/js/plugins/pace/pace.min.js"></script>

<!-- layerDate plugin javascript -->
<script src="/Pub/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/Pub/admin/js/plugins/layer/layer.min.js"></script>
<script>
    //外部js调用
    laydate({
        elem: '#hello', //目标元素。由于laydate.js封装了一个轻量级的选择器引擎，因此elem还允许你传入class、tag但必须按照这种方式 '#id .class'
        event: 'focus' //响应事件。如果没有传入event，则按照默认的click
    });

    //日期范围限制
    var start = {
        elem: '#start',
        format: 'YYYY/MM/DD hh:mm:ss',
        min: laydate.now(), //设定最小日期为当前日期
        max: '2099-06-16 23:59:59', //最大日期
        istime: true,
        istoday: false,
        choose: function (datas) {
            end.min = datas; //开始日选好后，重置结束日的最小日期
            end.start = datas //将结束日的初始值设定为开始日
        }
    };
    var end = {
        elem: '#end',
        format: 'YYYY/MM/DD hh:mm:ss',
        min: laydate.now(),
        max: '2099-06-16 23:59:59',
        istime: true,
        istoday: false,
        choose: function (datas) {
            start.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(start);
    laydate(end);
</script>

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script><!--统计代码，可删除-->

</body>

</html>