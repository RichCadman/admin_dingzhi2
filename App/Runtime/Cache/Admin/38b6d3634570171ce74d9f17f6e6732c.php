<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title>素材火www.sucaihuo.com - 小工具</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">


    <link href="/Pub/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Pub/admin//font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Pub/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
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
                <li class="active">
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
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="widgets.html#"><i class="fa fa-bars"></i> </a>
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
            <div class="col-lg-9">
                <h2>小工具</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">主页</a>
                    </li>
                    <li>
                        <strong>小工具</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget style1">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-trophy fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> 今日收入 </span>
                                <h2 class="font-bold">&yen; 4,232</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-cloud fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> 今日温度 </span>
                                <h2 class="font-bold">26'C</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-envelope-o fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> 新消息 </span>
                                <h2 class="font-bold">260</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 yellow-bg">
                        <div class="row">
                            <div class="col-xs-4">
                                <i class="fa fa-music fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> 新专辑 </span>
                                <h2 class="font-bold">12</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="widget navy-bg no-padding">
                        <div class="p-m">
                            <h1 class="m-xs">&yen; 1,540</h1>

                            <h3 class="font-bold no-margins">
                                年收入
                            </h3>
                            <small>项目年收入</small>
                        </div>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-chart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget lazur-bg no-padding">
                        <div class="p-m">
                            <h1 class="m-xs">&yen; 210,660</h1>

                            <h3 class="font-bold no-margins">
                                月收入
                            </h3>
                            <small>项目年收入</small>
                        </div>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-chart2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget yellw-bg no-padding">
                        <div class="p-m">
                            <h1 class="m-xs">&yen; 50,992</h1>

                            <h3 class="font-bold no-margins">
                                半年收入
                            </h3>
                            <small>市场销售额</small>
                        </div>
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">217</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-thumbs-up fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">400</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 navy-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-rss fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">10</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 lazur-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-phone fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">120</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 lazur-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-euro fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">462</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget style1 yellow-bg">
                        <div class="row vertical-align">
                            <div class="col-xs-3">
                                <i class="fa fa-shield fa-3x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h2 class="font-bold">610</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-head-color-box navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                Beaut-zihan
                            </h2>
                            <small>项目经理</small>
                        </div>
                        <img src="/Pub/admin/img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                        <div>
                            <span>100 动态</span> |
                            <span>350 关注</span> |
                            <span>610 关注者</span>
                        </div>
                    </div>
                    <div class="widget-text-box">
                        <h4 class="media-heading">Beaut-zihan</h4>
                        <p>前端工程师</p>
                        <div class="text-right">
                            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> 赞 </a>
                            <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> 收藏</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-shield fa-4x"></i>
                            <h1 class="m-xs">456</h1>
                            <h3 class="font-bold no-margins">
                                安全问题
                            </h3>
                            <small>账户</small>
                        </div>
                    </div>
                    <div class="widget  p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-flash fa-4x"></i>
                            <h1 class="m-xs">612</h1>
                            <h3 class="font-bold no-margins">
                                离线
                            </h3>
                            <small>账户</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget lazur-bg p-xl">

                        <h2>
                            Beaut-zihan
                        </h2>
                        <ul class="list-unstyled m-t-md">
                            <li>
                                <span class="fa fa-envelope m-r-xs"></span>
                                <label>Email:</label>
                                i@zi-han.net
                            </li>
                            <li>
                                <span class="fa fa-home m-r-xs"></span>
                                <label>Address:</label>
                                上海市闵行区绿地科技岛广场A座2606室
                            </li>
                            <li>
                                <span class="fa fa-phone m-r-xs"></span>
                                <label>Contact:</label>
                                (+020) 6780 3462
                            </li>
                        </ul>

                    </div>
                    <div class="widget red-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-bell fa-4x"></i>
                            <h1 class="m-xs">47</h1>
                            <h3 class="font-bold no-margins">
                                通知
                            </h3>
                            <small>我们检测到的错误。</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="widget yellow-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-thumbs-up fa-4x"></i>
                            <h1 class="m-xs">520</h1>
                            <h3 class="font-bold no-margins">
                                喜欢
                            </h3>
                            <small>账户</small>
                        </div>
                    </div>
                    <div class="widget yellow-bg p-lg text-center">
                        <div class="m-b-md">
                            <i class="fa fa-warning fa-4x"></i>
                            <h3 class="font-bold no-margins">
                                安全
                            </h3>
                            <small>共10个问题</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-lg">
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">

                        <div class="ibox-content">

                            <div>
                                <div class="chat-activity-list">

                                    <div class="chat-element">
                                        <a href="widgets.html#" class="pull-left">
                                            <img alt="image" class="img-circle" src="/Pub/admin/img/a2.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">1分钟前</small>
                                            <strong>奔波儿灞</strong>
                                            <p class="m-b-xs">
                                                跑步呐，最重要的是要有动力
                                            </p>
                                            <small class="text-muted">今天 09:02</small>
                                        </div>
                                    </div>

                                    <div class="chat-element right">
                                        <a href="widgets.html#" class="pull-right">
                                            <img alt="image" class="img-circle" src="/Pub/admin/img/a4.jpg">
                                        </a>
                                        <div class="media-body text-right ">
                                            <small class="pull-left">5分钟前</small>
                                            <strong>灞波儿奔 </strong>
                                            <p class="m-b-xs">
                                                V信已经提前恢复，也算是个好消息吧
                                            </p>
                                            <small class="text-muted">11月7日 21:38</small>
                                        </div>
                                    </div>

                                    <div class="chat-element ">
                                        <a href="widgets.html#" class="pull-left">
                                            <img alt="image" class="img-circle" src="/Pub/admin/img/a2.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right">2小时前</small>
                                            <strong>奔波儿灞</strong>
                                            <p class="m-b-xs">
                                                是你对不对
                                            </p>
                                            <small class="text-muted">11月8日 14:27</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-form">
                                <form role="form">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="消息内容…"></textarea>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-sm btn-primary m-t-n-xs"><strong>发送消息</strong>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-danger m-r-sm">12</button>
                                    消息
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary m-r-sm">28</button>
                                    文章
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info m-r-sm">15</button>
                                    评论
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-info m-r-sm">20</button>
                                    新闻
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success m-r-sm">40</button>
                                    赞
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger m-r-sm">30</button>
                                    通知
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-warning m-r-sm">20</button>
                                    专辑
                                </td>
                                <td>
                                    <button type="button" class="btn btn-default m-r-sm">40</button>
                                    群组
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning m-r-sm">30</button>
                                    权限
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ibox-content text-center">
                                    <h1>奔波儿灞</h1>
                                    <div class="m-b-sm">
                                        <img alt="image" class="img-circle" src="/Pub/admin/img/a8.jpg">
                                    </div>
                                    <p class="font-bold">CEO</p>

                                    <div class="text-center">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> 赞 </a>
                                        <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> 收藏</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ibox-content">
                                    <div>
                                        <div>
                                            <span>内存</span>
                                            <small class="pull-right">10/200 GB</small>
                                        </div>
                                        <div class="progress progress-small">
                                            <div style="width: 60%;" class="progress-bar"></div>
                                        </div>

                                        <div>
                                            <span>带宽</span>
                                            <small class="pull-right">20 GB</small>
                                        </div>
                                        <div class="progress progress-small">
                                            <div style="width: 50%;" class="progress-bar"></div>
                                        </div>

                                        <div>
                                            <span>占用</span>
                                            <small class="pull-right">73%</small>
                                        </div>
                                        <div class="progress progress-small">
                                            <div style="width: 40%;" class="progress-bar"></div>
                                        </div>

                                        <div>
                                            <span>FTP</span>
                                            <small class="pull-right">400 GB</small>
                                        </div>
                                        <div class="progress progress-small">
                                            <div style="width: 20%;" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ibox-content">
                        <h2>任务列表</h2>
                        <ul class="todo-list m-t">
                            <li>
                                <input type="checkbox" value="" name="" class="i-checks" />
                                <span class="m-l-xs">开会</span>
                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1小时</small>
                            </li>
                            <li>
                                <input type="checkbox" value="" name="" class="i-checks" checked/>
                                <span class="m-l-xs">项目开发</span>
                                <small class="label label-info"><i class="fa fa-clock-o"></i> 3小时</small>
                            </li>
                            <li>
                                <input type="checkbox" value="" name="" class="i-checks" />
                                <span class="m-l-xs">修改bug</span>
                                <small class="label label-warning"><i class="fa fa-clock-o"></i> 2小时</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <h2>Mini版任务列表</h2>
                            <ul class="todo-list m-t small-list">
                                <li>
                                    <a href="widgets.html#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                    <span class="m-l-xs todo-completed">开会</span>

                                </li>
                                <li>
                                    <a href="widgets.html#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                    <span class="m-l-xs  todo-completed">项目开发</span>

                                </li>
                                <li>
                                    <a href="widgets.html#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                    <span class="m-l-xs">修改bug</span>
                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> 1小时</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-t-lg">
                <div class="col-lg-12">
                    <div class="ibox-content">
                        <h2>世界地图</h2>
                        <small>中国地图或者省份地图可使用百度前端团队提供的echarts.js。<a href="graph_echarts.html">百度ECharts</a></small>
                        <div id="world-map" style="height: 300px;"></div>
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
<script src="/Pub/admin/js/jquery-ui-1.10.4.min.js"></script>
<script src="/Pub/admin/js/bootstrap.min.js"></script>
<script src="/Pub/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/Pub/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/Pub/admin/js/hplus.js"></script>
<script src="/Pub/admin/js/plugins/pace/pace.min.js"></script>

<!-- iCheck -->
<script src="/Pub/admin/js/plugins/iCheck/icheck.min.js"></script>

<!-- Jvectormap -->
<script src="/Pub/admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/Pub/admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Flot -->
<script src="/Pub/admin/js/plugins/flot/jquery.flot.js"></script>
<script src="/Pub/admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="/Pub/admin/js/plugins/flot/jquery.flot.resize.js"></script>
<script>
    $(document).ready(function () {
        var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
        var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

        var data1 = [
            {
                label: "Data 1",
                data: d1,
                color: '#17a084'
            },
            {
                label: "Data 2",
                data: d2,
                color: '#127e68'
            }
        ];
        $.plot($("#flot-chart1"), data1, {
            xaxis: {
                tickDecimals: 0
            },
            series: {
                lines: {
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 1
                        }, {
                            opacity: 1
                        }]
                    },
                },
                points: {
                    width: 0.1,
                    show: false
                },
            },
            grid: {
                show: false,
                borderWidth: 0
            },
            legend: {
                show: false,
            }
        });

        var data2 = [
            {
                label: "Data 1",
                data: d1,
                color: '#19a0a1'
            }
        ];
        $.plot($("#flot-chart2"), data2, {
            xaxis: {
                tickDecimals: 0
            },
            series: {
                lines: {
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 1
                        }, {
                            opacity: 1
                        }]
                    },
                },
                points: {
                    width: 0.1,
                    show: false
                },
            },
            grid: {
                show: false,
                borderWidth: 0
            },
            legend: {
                show: false,
            }
        });

        var data3 = [
            {
                label: "Data 1",
                data: d1,
                color: '#fbbe7b'
            },
            {
                label: "Data 2",
                data: d2,
                color: '#f8ac59'
            }
        ];
        $.plot($("#flot-chart3"), data3, {
            xaxis: {
                tickDecimals: 0
            },
            series: {
                lines: {
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 1
                        }, {
                            opacity: 1
                        }]
                    },
                },
                points: {
                    width: 0.1,
                    show: false
                },
            },
            grid: {
                show: false,
                borderWidth: 0
            },
            legend: {
                show: false,
            }
        });

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $(".todo-list").sortable({
            placeholder: "sort-highlight",
            handle: ".handle",
            forcePlaceholderSize: true,
            zIndex: 999999
        }).disableSelection();;

        var mapData = {
            "US": 498,
            "SA": 200,
            "CA": 1300,
            "DE": 220,
            "FR": 540,
            "CN": 120,
            "AU": 760,
            "BR": 550,
            "IN": 200,
            "GB": 120,
            "RU": 2000
        };

        $('#world-map').vectorMap({
            map: 'world_mill_en',
            backgroundColor: "transparent",
            regionStyle: {
                initial: {
                    fill: '#e4e4e4',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 0
                }
            },
            series: {
                regions: [{
                    values: mapData,
                    scale: ["#1ab394", "#22d6b1"],
                    normalizeFunction: 'polynomial'
                }]
            },
        });
    });
</script>

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script><!--统计代码，可删除-->

</body>

</html>