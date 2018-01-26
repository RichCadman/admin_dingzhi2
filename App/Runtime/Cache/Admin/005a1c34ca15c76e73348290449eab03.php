<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>素材火www.sucaihuo.com - web弹层组件layer</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/Pub/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Pub/admin//font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Pub/admin/css/animate.css" rel="stylesheet">
    <link href="/Pub/admin/css/style.css" rel="stylesheet">
    <link href="/Pub/admin/js/plugins/layer/skin/layer.css" rel="stylesheet">

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
                <li>
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
                        <li><a href="layerdate.html">日期选择器layerDate</a>
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

                <li class="active">
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
                        <li class="active"><a href="layer.html">Web弹层组件layer</a>
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
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="layer.html#"><i class="fa fa-bars"></i> </a>
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
                <h2>web弹层组件layer</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">主页</a>
                    </li>
                    <li>
                        <a>UI元素</a>
                    </li>
                    <li>
                        <strong>web弹层组件layer</strong>
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
                            <h5>layer简介</h5>
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
                            <p>layer是一款口碑极佳的web弹层组件，她具备全方位的解决方案，致力于服务各个水平段的开发人员，您的页面会轻松地拥有丰富而友好的操作体验。</p>

                            <p>在与同类弹出层插件的比较中，layer总是能轻易获胜。她尽可能地在以更少的代码展现更强健的功能，且格外注重性能的提升、易用和实用性，正因如此，越来越多的开发者将媚眼投上了layer（已被715357人次关注）。layer兼容了包括IE6在内的所有主流浏览器。 她数量可观的接口，使得您可以自定义太多您需要的风格，每一种弹层模式各具特色，广受欢迎。当然，这种“王婆卖瓜”的陈述听起来总是有点难受，因此你需要进一步了解她是否真的如你所愿。</p>

                            <p>layer遵循LGPL协议，将永久性提供无偿服务。历经两年，截至到2014年7月5号，已运用在15万家web平台，其中包括中国联通、蚂蚁短租、phpyun、中国网等知名网站，如果您有大型项目也在使用layer，您可以联系作者，以便在此展现案例，也为您的品牌推广尽一些绵薄之力。</p>
                            <hr>
                            <p>layer官网：<a href="http://sentsin.com/jquery/layer/" target="_blank">http://sentsin.com/jquery/layer/</a>
                                <br>layer官网文档：<a href="http://sentsin.com/jquery/layer/api.html" target="_blank">http://sentsin.com/jquery/layer/api.html</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>layer演示</h5>
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
                            <div class="layer_first">
                                <a href="javascript:;" class="btn btn-outline btn-default">信息框</a>
                                <a href="javascript:;" class="btn btn-outline btn-default">询问框</a>
                                <a href="javascript:;" style="_display:none;" class="btn btn-outline btn-default">页面层</a>
                                <a href="javascript:;" class="btn btn-outline btn-default">页面层</a>
                                <a href="javascript:;" class="btn btn-outline btn-default">iframe层</a>
                                <a href="javascript:;" class="btn btn-outline btn-default">iframe层</a>
                                <a href="javascript:;" class="btn btn-outline btn-default">加载层</a>
                                <a href="javascript:;" class="btn btn-outline btn-default">加载层</a>
                                <a href="javascript:;" class="btn btn-outline btn-default">tips</a>
                                <a href="javascript:;" class="btn btn-outline btn-default">tips</a>
                            </div>
                            <div class="layer_first">
                                <span class="open btn btn-outline btn-default" type="prompt">输入/文件层</span>
                                <span class="open btn btn-outline btn-default" type="tab">tab层</span>
                                <span class="open btn btn-outline btn-default" type="photos">相册层</span>
                            </div>
                            <ul class="layer_notice" style="display:none;width:360px;background: #fff;padding-top:20px;padding-bottom:20px;border: 1px solid #ccc;">
                                <li>1. layer1.8系列更新日志。</li>
                                <li>2. 拓展模块：layer.photos图片相册层功能讲解</li>
                                <li>3. 你也许还会需要：laydate日期控件</li>
                            </ul>
                            <pre style="height:300px;overflow:auto;">
触发弹层的事件可自由绑定，如：
$('#id').on('click', function(){
    layer.msg('test');
});
下面主要贴出上述例子的调用代码：
【信息框】：
layer.alert('白菜级别前端攻城师贤心', 8); //风格一
layer.msg('前端攻城师贤心'); //风格二
//当然，远远不止这两种风格。

【询问框】：
$.layer({
    shade: [0],
    area: ['auto','auto'],
    dialog: {
        msg: '您是如何看待前端开发？',
        btns: 2,                    
        type: 4,
        btn: ['重要','奇葩'],
        yes: function(){
            layer.msg('重要', 1, 1);
        }, no: function(){
            layer.msg('奇葩', 1, 13);
        }
    }
});
//还可用layer.confirm()快捷调用

【页面层一】
$.layer({
    type: 1,
    shade: [0],
    area: ['auto', 'auto'],
    title: false,
    border: [0],
    page: {dom : '.layer_notice'}
});

【页面层二】
var pageii = $.layer({
    type: 1,
    title: false,
    area: ['auto', 'auto'],
    border: [0], //去掉默认边框
    shade: [0], //去掉遮罩
    closeBtn: [0, false], //去掉默认关闭按钮
    shift: 'left', //从左动画弹出
    page: {
        html: '&lt;div style="width:420px; height:260px; padding:20px; border:1px solid #ccc; background-color:#eee;"&gt;&lt;p&gt;我从左边来，我自定了风格。&lt;/p&gt;&lt;button id="pagebtn" class="btns" onclick=""&gt;关闭&lt;/button&gt;&lt;/div&gt;'
    }
});
//自设关闭
$('#pagebtn').on('click', function(){
    layer.close(pageii);
});

【iframe层一】
$.layer({
    type: 2,
    shadeClose: true,
    title: false,
    closeBtn: [0, false],
    shade: [0.8, '#000'],
    border: [0],
    offset: ['20px',''],
    area: ['1000px', ($(window).height() - 50) +'px'],
    iframe: {src: 'http://f2e.sentsin.com/chat'}
}); 

【iframe层二】
layer.tips('5秒后右下角窗口自动关闭，并生成一个新的iframe', this, {
    time: 5,
    maxWidth: 260
});
$.layer({
    type: 2,
    closeBtn: false,
    shadeClose: true,
    shade: [0.1, '#fff'],
    border: [0],
    time: 5,
    iframe: {
        src: 'test/guodu.html'
    },
    title: false,
    area: ['300px','250px'],
    shift: 'right-bottom',
    end: function(){
        $.layer({
            type : 2,
            title: '贤心博客 - sentsin.com',
            shadeClose: true,
            maxmin: true,
            fix : false,  
            area: ['1024px', 500],                     
            iframe: {
                src : 'http://sentsin.com/'
            } 
        });
    }
});

【加载层一】
layer.load(3);

【加载层二】
layer.load('加载带文字', 3);

【tips层一】
layer.tips('tips的样式并非是固定的，您可自定义外观。', this, {
    style: ['background-color:#78BA32; color:#fff', '#78BA32'],
    maxWidth:185,
    time: 3,
    closeBtn:[0, true]
});

【tips层二】
layer.tips('默认没有关闭按钮', this , {guide: 1, time: 2});

【输入/文件层】
//普通文本
layer.prompt({title: '您的名字？'}, function(name){
    alert(name);
});
//密码文本
layer.prompt({title: '输入任何口令，并确认',type: 1}, function(pass){
    alert(pass);
});
//文件上传
layer.prompt({title: '随便上传个东东，并确认',type: 2}, function(file){
    alert(file);
});
//多行文本
layer.prompt({title: '随便写点啥，并确认',type: 3}, function(val){
    alert(val);
});

【tab层】
layer.tab({
    area: ['1000px', '500px'],
    data: [
        {title: 'Say', content:'Hi，Main'},
        {title: '无题', content:'支持html传入'}                    
    ]
});

【相册层】
//此处为异步请求模式，具体的json格式，请等待文档更新。或者你直接通过请求看photos.json
var conf = {};
$.getJSON('ajax地址', {}, function(json){
    conf.photoJSON = json; //保存json，以便下次直接读取内存数据
    layer.photos({
        html: '这里传入自定义的html，也可以不用传入（这意味着不会输出右侧区域）。相册支持左右方向键、Esc关闭',
        json: json
    });
});</pre>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>layer API文档</h5>
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
                            <div class="panel blank-panel">

                                <div class="panel-heading">
                                    <div class="panel-options">

                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="tabs_panels.html#base">基础参数</a>
                                            </li>
                                            <li class=""><a data-toggle="tab" href="tabs_panels.html#integrated">集成方法</a>
                                            </li>
                                            <li class=""><a data-toggle="tab" href="tabs_panels.html#expand">拓展方法</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="panel-body">

                                    <div class="tab-content">
                                        <div id="base" class="tab-pane active">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <td style="width:20%;">键: 值</td>
                                                    <td style="width:80%;">描述</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr style="background:##3E3F34;">
                                                    <td colspan="2" style="padding:10px 20px;">下表的属性都是默认值，您可在调用时按需重新配置，他们可帮助你实现各式各样的风格。如是调用： $.layer({键: 值, 键: 值, …});</td>
                                                </tr>
                                                <tr>
                                                    <td>type: 0</td>
                                                    <td>层的类型。0：信息框（默认），1：页面层，2：iframe层，3：加载层，4：tips层。
                                                        <p>此为重要参数，不同类型层的总开关，若为type:0则不需要配置，其它类型层在调用时必须设置type。</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>title: '信息'</td>
                                                    <td>
                                                        控制默认标题栏。
                                                        <br>如想自定义标题样式，可以 title: ['标题', 'background:#c00;'] //第二个参数可书写任意css
                                                        <br>如不想显示标题栏，配置title: false 即可
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>maxmin: false</td>
                                                    <td>
                                                        是否输出窗口最小化/全屏/还原按钮。
                                                        <br>如需要开启，设置maxmin: true 即可
                                                        <br>此功能为layer1.8开始新增
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>offset: ['', '']</td>
                                                    <td>控制层坐标。
                                                        <br>offset的值分别是： [纵坐标, 横坐标]，默认为垂直水平居中
                                                        <br>如果您要设定纵坐标，可以：offset:['200px', '']/td&gt;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>area: ['310px', '130px']</td>
                                                    <td>控制层宽高。
                                                        <br>area值分别为：[宽度, 高度]
                                                        <br>当设置为auto时，意味着采用自适应（iframe层不能设置auto）, 对于宽度，并不推荐您设置auto。</td>
                                                </tr>
                                                <tr>
                                                    <td>border: [10, 0.3, '#000']</td>
                                                    <td>控制层的边框。
                                                        <br>border的值分别为：[边框大小, 透明度, 颜色, layer1.8之前需在此处加true]
                                                        <br>如果您不想显示border，设置 border: [0] 即可</td>
                                                </tr>
                                                <tr>
                                                    <td>shade: [0.5, '#000']</td>
                                                    <td>控制遮罩。
                                                        <br>值分别是：[遮罩透明度, 遮罩颜色, layer1.8之前需在此处加true]
                                                        <br>如果不想显示遮罩，配置shade: [0]即可</td>
                                                </tr>
                                                <tr>
                                                    <td>shadeClose: false</td>
                                                    <td>用来控制点击遮罩区域是否关闭层。
                                                        <br>若开启，设为true即可</td>
                                                </tr>
                                                <tr>
                                                    <td>closeBtn: [0, true]</td>
                                                    <td>控制层右上角关闭按钮。
                                                        <br>closeBtn的值分别为: [关闭按钮的风格（支持0和1）, true]
                                                        <br>若不想显示关闭按钮，配置 closeBtn: false即可</td>
                                                </tr>
                                                <tr>
                                                    <td>time: 0</td>
                                                    <td>自动关闭等待秒数，整数值。
                                                        <br>0表示不自动关闭，若3秒后自动关闭，time: 3即可</td>
                                                </tr>
                                                <tr>
                                                    <td>fix: true,</td>
                                                    <td>用于设定层是否不随滚动条而滚动，固定在可视区域。</td>
                                                </tr>
                                                <tr>
                                                    <td>move: '.xubox_title'</td>
                                                    <td>设定某个元素来实现对层的拖拽。
                                                        <br>值为：用来拖拽的元素选择器
                                                        <br>若不想拖拽，move: false即可</td>
                                                </tr>
                                                <tr>
                                                    <td>moveOut: false</td>
                                                    <td>用于控制层是否允许被拖出可视窗口外</td>
                                                </tr>
                                                <tr>
                                                    <td>moveType: 0</td>
                                                    <td>用于配置拖拽类型（layer1.7之前版本不支持）
                                                        <br>默认为引导式拖动层，若值设为1，则直接拖动层</td>
                                                </tr>
                                                <tr>
                                                    <td>bgcolor: '#fff'</td>
                                                    <td>用于控制层的背景色
                                                        <br>如果不想设置任何颜色，设置空字符即可。但是对于type:0的对话框层而言，始终都是白色</td>
                                                </tr>
                                                <tr>
                                                    <td>zIndex: 19891014</td>
                                                    <td>控制层堆叠顺序（即css的z-index）。整数值。
                                                        <br>合理设置它，可以避免与其它插件的层级冲突</td>
                                                </tr>
                                                <tr>
                                                    <td>maxWidth: 400</td>
                                                    <td>最大宽度。整数值。
                                                        <br>当area宽度设为auto时才有用。</td>
                                                </tr>
                                                <tr>
                                                    <td>fadeIn: 300,</td>
                                                    <td>用于控制层渐显弹出（layer1.7之前版本不支持）
                                                        <br>值为毫秒数</td>
                                                </tr>
                                                <tr>
                                                    <td>btns: 1,</td>
                                                    <td>按钮的个数。提供了0-2的选择，设置0表示不输出按钮
                                                        <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>btn: ['确定', '取消'],</td>
                                                    <td>[按钮一的文本值 , 按钮二的文本值]
                                                        <br>必须btns值大于0才有效</td>
                                                </tr>
                                                <tr>
                                                    <td>shift: '',</td>
                                                    <td>用于控制动画弹出
                                                        <br>有七种选择：左上(left-top),上(top), 右上(right-top),右下(right-bottom),下(bottom),左下(left-bottom),左('left')。
                                                        <br>如shift:'top' 表示从上动画弹出</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>dialog: {
    type: 3,
    msg: ''
}</pre>
                                                    </td>
                                                    <td>
                                                        信息框层模式提供的私有参数。使用时，按需配置即可
                                                        <br>type: 图标类型，提供了0-16的选择，也许有你喜欢的。 设置-1不显示图标
                                                        <br>msg: 信息框内容，重要参数
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>page: {
    dom: '#id', 
    html: '',
    url: '',
}</pre>
                                                    </td>
                                                    <td>
                                                        页面层模式私有参数。
                                                        <br>dom: 页面已存在的选择器
                                                        <br>html: 直接传入的html字符串。
                                                        <br>url: ajax请求地址。
                                                        <br>ok: ajax请求完毕后执行的回调，datas是异步传递过来的值。
                                                        <br>需要特别注意的是，dom、html、url只需设定其中一个就行，若配置html或url，你必须也配置宽高值。
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>iframe: {
    src: '',
}</pre>
                                                    </td>
                                                    <td>
                                                        iframe层模式私有参数。
                                                        <br>src: 要打开的网址。
                                                        <br>scrolling: 是否允许iframe出现滚动条，默认自动。允许：'yes'，不允许：'no'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>loading: {
    type: 0
}</pre>
                                                    </td>
                                                    <td>
                                                        加载层私有属性。
                                                        <br>type: loading图标类型（提供了0-3的选择）。
                                                        <br>一般配合ajax使用
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>tips : {
    msg: '',
    follow: '#id',
    guide: 0,
    isGuide: true,
    more: false,
    style: ['', '']
}</pre>
                                                    </td>
                                                    <td>
                                                        tips提示层私有属性。
                                                        <br>msg: 提示内容。
                                                        <br>follow: 吸附目标选择器。
                                                        <br>guide: 指引方向（0：上，1：右，2：下，3：左）。
                                                        <br>isGuide: 是否显示默认三角形。 这个参数可配合msg帮助你自定义三角形icon
                                                        <br>more: 是否允许多个tips
                                                        <br>style: ['background-color:#FFF8ED; color:#000; border:1px solid #FF9900; /* 此处可用来自定义tips的css样式 */', '#FF9900']]。 数组第二个值，为三角形的颜色。
                                                    </td>
                                                </tr>
                                                <tr style="background:##3E3F34;">
                                                    <td colspan="2" style="padding:10px 20px; text-align:center;">回调函数</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>success: function(layero){

                    }
                                        </pre>
                                                    </td>
                                                    <td>
                                                        层弹出成功后的回调函数.
                                                        <br>layero是回调传过来的当前层容器的实例，这意味着你可以对当前弹层进行dom操作
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>yes: function(index){}
                                        </pre>
                                                    </td>
                                                    <td>
                                                        按钮一的回调函数
                                                        <br>index为当前层的索引，主要用来回调执行后，配合layer.close(index)来关闭层
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>no: function(index){}
                                        </pre>
                                                    </td>
                                                    <td>
                                                        按钮二的回调函数
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>close: function(index){}
                                        </pre>
                                                    </td>
                                                    <td>
                                                        层右上角关闭按钮的点击事件触发回调函数。
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>end: function(){}
                                        </pre>
                                                    </td>
                                                    <td>
                                                        层被彻底关闭后执行的回调函数。
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>moveEnd: function(){}
                                        </pre>
                                                    </td>
                                                    <td>
                                                        拖拽完毕触发的回调函数
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                <pre>min: function(layero){},
    full: function(layero){},
    restore: function(layero){}</pre>
                                                    </td>
                                                    <td>
                                                        分别为最小化、全屏、还原触发后的回调函数
                                                        <br>layero是当前层容器的实例
                                                        <br>layer1.8开始新增
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="integrated" class="tab-pane">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <td style="width:10%;">方法名</td>
                                                    <td style="width:90%;">描述</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>$.layer({基础参数})</td>
                                                    <td>
                                                        核心接口，参数是一个对象，对象属性参见基础参数。
                                                        <br>诸如layer.alert/layer.confirm/layer.msg/layer.tips等皆为$.layer()的二次封装。
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.v</td>
                                                    <td>获取layer版本号。</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.alert(msg, icon, fn)</td>
                                                    <td>
                                                        对单按钮信息框的重新封装
                                                        <br>参数分别为: 提示内容, 图标类型(-1到16的选择), 回调函数或标题
                                                        <br>如：layer.alert('你好layer', 9);

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.confirm(msg, yes, no)</td>
                                                    <td>
                                                        对询问框的重新封装
                                                        <br>参数分别为: 提示内容, 确定回调函数, 取消回调函数或标题
                                                        <br>如：
                                                        <pre>layer.confirm('确定删除吗？', function(){
    //删除成功
});</pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.msg(msg, time, parme)</td>
                                                    <td>
                                                        对无标题栏信息框层的重新封装
                                                        <br>参数分别为: 提示内容, 自动关闭秒数（默认2）, 对象或回调函数或图标类型
                                                        <br>当parme是一个对象时，您可配置{type: 图标, shade: 是否开启遮罩(默认true), rate: 弹出的动画类型，具体值见layer.shift的参数说明}
                                                        <br>当parme是一个函数时，则将作为层消失后的end的回调
                                                        <br>当parme是一个数字时，则将作为msg的图标类型
                                                        <br>如：
                                                        <pre>layer.msg('删除成功', 2, function(){
    location.reload(); //自动关闭后可做一些刷新页面等操作
});</pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.load(parme, loadStype)</td>
                                                    <td>
                                                        对加载层的重新封装
                                                        <br>参数分别为：加载提示语或自动关闭所需秒数, 加载风格（0-3的选择）
                                                        <br>如果parme是一段文字，您可以这样：layer.load('加载中');
                                                        <br>如果parme是一个数字，则为自动关闭所需最长等待秒数(0时则不自动关闭) ，如：layer.load(3) //3秒后自动消失</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.tips(html, follow, parme)</td>
                                                    <td>
                                                        对tips层的重新封装。
                                                        <br>参数分别为：tips内容, 要吸引的dom对象, 对象
                                                        <br>parme允许传这些属性{time: 自动关闭所需秒, maxWidth: 最大宽度, guide: 指引方向, style: tips样式（参加api表格一中的style属性）}
                                                        <br>如：
                                                        <pre>obj.on('click', function(){
    layer.tips('这是小提示','#id');
});</pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.close(index)</td>
                                                    <td>
                                                        用于手动关闭层。
                                                        <br>index参数为调用layer时返回的索引值。如:
                                                        <pre>var index = $.layer({此处是您的配置}); //诸如 var index = layer.alert();之类的也会返回index索引
//关闭时，只要把index传给close方法即可关闭对应的层，如：
layer.close(index);</pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.closeTips()</td>
                                                    <td>用于关闭tips层。</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.closeAll()</td>
                                                    <td>用于关闭所有层，在多层模式时也许会用到</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.area(index, options)</td>
                                                    <td>用于重定义指定层的宽高、坐标、z-index等。
                                                        <br>参数分别为：层的索引, 对象
                                                        <br>options允许传这些属性 {width:宽度, height: 高度, top: 纵坐标, left:横坐标, zIndex:z-index值}等css属性。
                                                        <br>该方法仅针对页面层（type:1）和iframe层（type:2）有效;</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.title(name, index)</td>
                                                    <td>用于动态改变层的标题。
                                                        <br>参数name为标题名，index为层的索引;</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.autoArea(index)</td>
                                                    <td>用来处理在层中宽高改变时，重新自适应层宽高。必填参数为层的索引值</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.getChildFrame(selector, index)</td>
                                                    <td>
                                                        获取子iframe中的DOM。一般用于父窗口操作iframe页。
                                                        <br>参数分别为：iframe页的选择器, 层索引
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.getFrameIndex(window.name)</td>
                                                    <td>
                                                        <br>获取当前所在iframe层的索引。
                                                        <br>只允许在iframe页面内部调用。如在内部关闭自身：
                                                        <pre>var index = parent.layer.getFrameIndex(window.name);
parent.layer.close(index);</pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.iframeAuto(index)</td>
                                                    <td>
                                                        用于让iframe层自适应。
                                                        <br>index为层的索引</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.iframeSrc(index, url)</td>
                                                    <td>用于重置iframe层的url
                                                        <br>参数分别为: 层的索引, url链接</td>
                                                </tr>

                                                <tr>
                                                    <td>layer.setMove()</td>
                                                    <td>当拖拽元素改变时，可用此方法重新初始化拖拽。</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.setTop(layerNow)</td>
                                                    <td>
                                                        引用此方法可开启点击使当前窗口置顶功能，只能用于用在success回调中。
                                                        <br>layerNow参数即为success回调函数中传过来的参数，即当前layer容器。当需要时，需配置zIndex:layer.zIndex，
                                                        <br>详见[场景实例]页面的例子：无限层中层</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        layer.min(index, options) layer.full(index, options) layer.restore(index)
                                                    </td>
                                                    <td>
                                                        三个方法功能分别为：最小化、全屏、还原
                                                        <br>index为层的索引，可通过var index = $.layer({})得到
                                                        <br>options需传入层{area: [正常尺寸下的宽度, 正常尺寸下的高度], offset: [正常尺寸下的top, 正常尺寸下的left]}
                                                        <br>如：layer.full(1, {area: ['300px', '200px', offset: ['200px', '']]}); 即可自己去控制什么地方操作全屏
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.use(module, callback)</td>
                                                    <td>
                                                        载入一个模块，支持载入js、css。
                                                        <br>参数分别为：css或js路径, 加载完毕回调函数
                                                        <br>如载入一个js：layer.use('extend/layer.ext.js', function(){});
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.index</td>
                                                    <td>静态属性，用于获取最近一次触发的层索引值</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.zIndex</td>
                                                    <td>静态属性，用于获取layer容器中的最大z-index值</td>
                                                </tr>
                                                <tr>
                                                    <td>layer.path</td>
                                                    <td>静态属性，获取当前layer的存放路径。</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="expand" class="tab-pane">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <td style="width:25%;">方法名</td>
                                                    <td style="width:75%;">描述</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr style="background:##3E3F34;">
                                                    <td colspan="2" style="padding:20px;">
                                                        目前拓展方法主要是指layer.ext.js提供的拓展类，您可以按照自己的需求选择引入，同样的，不需要引入css，只需要执行 layer.use('extend/layer.ext.js') 即可，关于layer.use的使用，请看集成方法的介绍;
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.ext = function(){}</td>
                                                    <td>
                                                        首次加载layer.ext.js模块完毕的回调方法。
                                                        <br>如果页面一加载即执行拓展层，需用到此方法。
                                                        <br>如：
                                                        <pre>layer.use('extend/layer.ext.js', function(){
        layer.ext = function(){
        layer.prompt();
    }
})</pre>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.prompt(options, yes, no);</td>
                                                    <td>
                                                        用于弹出一个prompt层模式
                                                        <br>参数分别为：对象, 确定的回调函数, 取消的回调函数
                                                        <br>options允许你配置：
                                                        <pre>{
    top: 高度, 
    type: 0, //支持普通文本框（0）、密码框（1）、文件框（2）、多行文本框（3）, 
    title: '标题',
    val: '', //表单的默认值
    length: 200 //表单框可输入的最长值  
}</pre>
                                                        如：
                                                        <pre id="layerPro">layer.prompt({title: '测试'}, function(val, index, elem){
    //index为该层索引，elem为表单元素。
    alert('得到：'+ val);
})</pre>
                                                        <a class="btns" href="javascript:new Function($('#layerPro').html())();">试一试</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.tab(parme)</td>
                                                    <td>
                                                        实现弹出tab层。
                                                        <br>parme是一个对象，它允许传入{data: [], area: 宽高, offset: 坐标} 如：
                                                        <pre id="layerTab">layer.tab({
    data:[
        {title: '标题一', content:'内容一，可加html'}, 
        {title: '标题二', content:'内容二。什么？嫌tab层太难看？噢是的，这只是个骨架。'}
    ],
    area: ['600px', '300px'] //宽度，高度
});</pre>
                                                        <a class="btns" href="javascript:new Function($('#layerTab').html())();">试一试</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.photos(options)</td>
                                                    <td>
                                                        实现图片的相册模式浏览。支持异步请求过来的json数据、支持直接弹出页面指定区域所有图片
                                                        <br>options是一个对象，具体调用，<a class="btns" href="http://sentsin.com/jquery/layer/ext.html" target="_blank">深入了解</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>layer.photosPage(options)</td>
                                                    <td>
                                                        直接弹出页面指定区域所有图片以实现相册浏览。他是对layer.photos的二次封装
                                                        <br>options同样是一个对象，具体调用，<a class="btns" href="http://sentsin.com/jquery/layer/ext.html" target="_blank">深入了解</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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

<!-- layer javascript -->
<script src="/Pub/admin/js/plugins/layer/layer.min.js"></script>
<script>
    layer.use('extend/layer.ext.js'); //载入layer拓展模块
</script>

<script src="/Pub/admin/js/demo/layer-demo.js"></script>

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script><!--统计代码，可删除-->

</body>

</html>