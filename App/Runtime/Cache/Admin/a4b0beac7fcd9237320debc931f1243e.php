<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>素材火www.sucaihuo.com - WebIM 即时通信</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="/Pub/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Pub/admin//font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Morris -->
    <link href="/Pub/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/Pub/admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/Pub/admin/css/animate.css" rel="stylesheet">
    <link href="/Pub/admin/css/style.css" rel="stylesheet">
    <link href="/Pub/admin/js/plugins/layer/layim/layim.css" rel="stylesheet">

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
                <li class="active">
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
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="webim.html#"><i class="fa fa-bars"></i> </a>
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

        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>WebIM 即时通信 简介</h5>

                                </div>
                                <div class="ibox-content">
                                    <p>WebIM基于阿里大牛贤心的layim修改而来，layim是一款不错的web即时通讯的jQuery插件。主要修改内容：</p>
                                    <hr>
                                    <ul>
                                        <li>1. 所有图片图标修改为字体图标，提高加载效率；</li>
                                        <li>2. 整合到H+中，解决了一些兼容性问题；</li>
                                    </ul>
                                    <hr>
                                    <p>如果需要商业授权，请联系原作者。 <a href="http://sentsin.com/" target="_blank">贤心</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>示例</h5>
                                </div>
                                <div class="ibox-content">
                                    <div class="alert alert-info">
                                        请在右下角的窗口中查看。
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>如何使用</h5>
                                </div>
                                <div class="ibox-content">
                                    <ul class="list-group clear-list" style="margin-bottom:0;">
                                        <li class="list-group-item fist-item">
                                            <p>
                                                <span class="label label-success">1</span> 安装插件
                                            </p>
                                            <br>
                                            <pre>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head>
    ……
    &lt;link href="/Pub/admin/js/plugins/layer/layim/layim.css"&gt;
&lt;/head&gt;
&lt;body&gt;
……
    &lt;script src="/Pub/admin/js/plugins/layer/layer.min.js"&gt;&lt;/script&gt;
    &lt;script src="/Pub/admin/js/plugins/layer/layim/layim.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
                                        </li>
                                        <li class="list-group-item">
                                            <p>
                                                <span class="label label-info">2</span> 插件配置
                                            </p>
                                            <br>
                                            <pre>在/Pub/admin/js/plugins/layer/layer.min.js中找到如下内容，进行自定义设置：
___________________________________________________________________
var config = {
    msgurl: 'mailbox.html',
    chatlogurl: 'mailbox.html',
    aniTime: 200,
    right: -232,
    api: {
        friend: '/Pub/admin/js/plugins/layer/layim/data/friend.json', //好友列表接口
        group: '/Pub/admin/js/plugins/layer/layim/data/group.json', //群组列表接口 
        chatlog: '/Pub/admin/js/plugins/layer/layim/data/chatlog.json', //聊天记录接口
        groups: '/Pub/admin/js/plugins/layer/layim/data/groups.json', //群组成员接口
        sendurl: '' //发送消息接口
    },
    user: { //当前用户信息
        name: '游客',
        face: 'http://tp1.sinaimg.cn/1670071920/180/1287996904/1'
    },
    
    //自动回复内置文案，也可动态读取数据库配置
    autoReplay: [
        '您好，我现在有事不在，一会再和您联系。', 
        '你没发错吧？',
        '洗澡中，请勿打扰，偷窥请购票，个体四十，团体八折，订票电话：一般人我不告诉他！',
        '你好，我是主人的美女秘书，有什么事就跟我说吧，等他回来我会转告他的。',
        '我正在拉磨，没法招呼您，因为我们家毛驴去动物保护协会把我告了，说我剥夺它休产假的权利。',
        '<（@￣︶￣@）>',
        '你要和我说话？你真的要和我说话？你确定自己想说吗？你一定非说不可吗？那你说吧，这是自动回复。',
        '主人正在开机自检，键盘鼠标看好机会出去凉快去了，我是他的电冰箱，我打字比较慢，你慢慢说，别急……',
        '(*^__^*) 嘻嘻，是贤心吗？'
    ],
    
    ……</pre>
                                        </li>
                                        <li class="list-group-item">
                                            <p>
                                                <span class="label label-primary">3</span> 输出数据
                                            </p>
                                            <br>
                                            <p>按照/Pub/admin/js/plugins/layer/layim/data/的json文件提供的数据接口输出规定的数据格式，注意：如果第二步修改了api的内容，注意输出数据的路径。</p>

                                        </li>
                                    </ul>
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

<script src="/Pub/admin/js/plugins/layer/layer.min.js"></script>
<script src="/Pub/admin/js/plugins/layer/layim/layim.js"></script>


<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script><!--统计代码，可删除-->
</body>

</html>