<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>素材火www.sucaihuo.com - 步骤条</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/Pub/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Pub/admin//font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Pub/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/Pub/admin/css/plugins/steps/jquery.steps.css" rel="stylesheet">
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
                        <li class="active"><a href="form_wizard.html">步骤条</a>
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
                        <li><a href="table_data_tables.html">数据表格</a>
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
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="form_wizard.html#"><i class="fa fa-bars"></i> </a>
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
                <h2>步骤条</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">主页</a>
                    </li>
                    <li>
                        <a>表单</a>
                    </li>
                    <li>
                        <strong>步骤条</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-5">
                    <div class="jumbotron">
                        <h1>步骤条</h1>
                        <p>Smart UI 部件允许您快速创建步骤条接口。</p>
                        <p><a href="http://www.jquery-steps.com/GettingStarted" target="_blank" class="btn btn-primary btn-lg" role="button">了解 jQuery Steps</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>基础步骤条</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="form_wizard.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="form_wizard.html#">选项1</a>
                                    </li>
                                    <li><a href="form_wizard.html#">选项2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <p>
                                这是一个简单的步骤条示例
                            </p>
                            <div id="wizard">
                                <h1>第一步</h1>
                                <div class="step-content">
                                    <div class="text-center m-t-md">
                                        <h2>第一步</h2>
                                        <p>
                                            这是第一步的内容
                                        </p>
                                    </div>
                                </div>

                                <h1>第二步</h1>
                                <div class="step-content">
                                    <div class="text-center m-t-md">
                                        <h2>第二步</h2>
                                        <p>
                                            这是第二步的内容
                                        </p>
                                    </div>
                                </div>

                                <h1>第三步</h1>
                                <div class="step-content">
                                    <div class="text-center m-t-md">
                                        <h2>第三步</h2>
                                        <p>
                                            这是第三步的内容
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>带验证的步骤条</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="form_wizard.html#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="form_wizard.html#">选项1</a>
                                    </li>
                                    <li><a href="form_wizard.html#">选项2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                带验证的步骤条
                            </h2>
                            <p>
                                下面这个示例展示了如何在步骤条中使用 jQuery Validation 插件
                            </p>

                            <form id="form" action="form_wizard.html#" class="wizard-big">
                                <h1>账户</h1>
                                <fieldset>
                                    <h2>账户信息</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>用户名 *</label>
                                                <input id="userName" name="userName" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>密码 *</label>
                                                <input id="password" name="password" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>确认密码 *</label>
                                                <input id="confirm" name="confirm" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>个人资料</h1>
                                <fieldset>
                                    <h2>个人资料信息</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>姓名 *</label>
                                                <input id="name" name="name" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="text" class="form-control required email">
                                            </div>
                                            <div class="form-group">
                                                <label>地址 *</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h1>警告</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                        <h2>你是火星人 :-)</h2>
                                    </div>
                                </fieldset>

                                <h1>完成</h1>
                                <fieldset>
                                    <h2>条款</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms">我同意注册条款</label>
                                </fieldset>
                            </form>
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

<!-- Steps -->
<script src="/Pub/admin/js/plugins/staps/jquery.steps.min.js"></script>

<!-- Jquery Validate -->
<script src="/Pub/admin/js/plugins/validate/jquery.validate.min.js"></script>
<script src="/Pub/admin/js/plugins/validate/messages_zh.min.js"></script>


<script>
    $(document).ready(function () {
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex) {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex) {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18) {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex) {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex) {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3) {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex) {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
            errorPlacement: function (error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
    });
</script>

<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script><!--统计代码，可删除-->

</body>

</html>