<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"F:\pebble\public/../application/admin\view\config\site_index.html";i:1494239574;s:54:"F:\pebble\public/../application/admin\view\layout.html";i:1494491234;s:61:"F:\pebble\public/../application/admin\view\public_header.html";i:1494239574;s:59:"F:\pebble\public/../application/admin\view\public_left.html";i:1494913602;s:61:"F:\pebble\public/../application/admin\view\public_footer.html";i:1494239574;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>wemall商城后台管理</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="__PUBLIC__/static/plugins/bootstrap/css/bootstrap.min.css?v=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="__PUBLIC__/static/dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="__PUBLIC__/static/dist/css/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="__PUBLIC__/static/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="__PUBLIC__/static/dist/css/AdminLTE.css?v=1">
    <!-- Date Picker -->
    <link rel="stylesheet" href="__PUBLIC__/static/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="__PUBLIC__/static/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="__PUBLIC__/static/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- layui -->
    <link rel="stylesheet" href="__PUBLIC__/static/layui/css/layui.css?v=2">

    <link rel="stylesheet" href="__PUBLIC__/static/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="__PUBLIC__/static/dist/js/html5shiv.min.js"></script>
    <script src="__PUBLIC__/static/dist/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="__PUBLIC__/static/plugins/toastr/toastr.min.css">
    <!-- jQuery 2.1.4 -->
    <script src="__PUBLIC__/static/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- layui -->
    <script src="__PUBLIC__/static/layui/layui.js?v=2"></script>
    <!--ueditor-->
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/static/ueditor/ueditor.config.js?v=1"></script>
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/static/ueditor/ueditor.all.min.js"></script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="__PUBLIC__/static/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src='__PUBLIC__/static/plugins/nprogress/nprogress.js'></script>
    <link rel='stylesheet' href='__PUBLIC__/static/plugins/nprogress/nprogress.css'/>
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="__PUBLIC__/static/zTree/css/zTreeStyle/zTreeStyle.css"> -->
    <!-- <script type="text/javascript" charset="utf-8" src='__PUBLIC__/static/zTree/js/jquery.ztree.all.js'></script> -->
    <script>
        var URL = '__ROOT__/';
        var PUBLIC = '__PUBLIC__';
    </script>
</head>

<body class="hold-transition skin-red-light">
    <div class="wrapper">
        <header class="main-header" style="position: fixed;width: 100%;background-color: white;z-index: 99;border-bottom: 1px solid #eeeeee;">
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="javascript:void(0)" class="sidebar-toggle" id="sidebar-menu-title"></a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <!--信息通知-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                            </a>
                            <ul class="dropdown-menu">
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                            </a>
                            <ul class="dropdown-menu">
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="__PUBLIC__/static/dist/img/avatar-wemall.png" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo \think\Session::get('user_auth.username'); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <!-- <li class="user-header">
                                    <img src="__PUBLIC__/static/dist/img/avatar-wemall.png" class="img-circle" alt="User Image">
                                    <p>
                                        <?php echo \think\Session::get('user_auth.username'); ?>
                                        <small>管理员</small>
                                    </p>
                                </li> -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <a href="<?php echo url('admin/public/loginout'); ?>" target="_self" class="btn btn-default btn-flat">注销</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar" style="background-color: #444;">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <div class="team-logo" style="background-image: url(__PUBLIC__/static/dist/img/avatar-wemall.png)"></div>
                <!-- Sidebar user panel -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" id="sidebar-menu" style="margin-top: 24px">
                    <li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>首页</span> 
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('admin/index/index'); ?>"><i class="fa "></i>系统首页</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-gears"></i> <span>设置</span> 
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('/admin/config/site/index'); ?>"><i class="fa "></i>站点设置</a></li>
        <li><a href="<?php echo url('/admin/config/sms/index'); ?>"><i class="fa "></i>短信配置</a></li>
        <li><a href="<?php echo url('/admin/config/mail/index'); ?>"><i class="fa "></i>邮件配置</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-link"></i> <span>微信</span> 
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('/admin/wx/config/index'); ?>"><i class="fa "></i>微信配置</a></li>
        <li><a href="<?php echo url('/admin/wx/menu/index'); ?>"><i class="fa "></i>微信菜单</a></li>
        <li><a href="<?php echo url('/admin/wx/reply/index'); ?>"><i class="fa "></i>自定义回复</a></li>
        <li><a href="<?php echo url('/admin/wx/tplmsg/index'); ?>"><i class="fa "></i>模版消息</a></li>
        <li><a href="<?php echo url('/admin/wx/kefu/index'); ?>"><i class="fa "></i>多客服设置</a></li>
        <li><a href="<?php echo url('/admin/wx/print/index'); ?>"><i class="fa "></i>微信打印机</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-edit"></i> <span>内容</span> 
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('/admin/article/index/index'); ?>"><i class="fa "></i>文章列表</a></li>
        <li><a href="<?php echo url('/admin/article/category/index'); ?>"><i class="fa "></i>文章分类</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-edit"></i> <span>商品</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('/admin/goods/index/index'); ?>"><i class="fa "></i>商品列表</a></li>
        <li><a href="<?php echo url('/admin/goods/category/index'); ?>"><i class="fa "></i>商品分类</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="javascript:void(0)">
        <i class="fa fa-code"></i> <span>模版</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('/admin/tpl/shop/index'); ?>"><i class="fa "></i>模版设置</a></li>
        <li><a href="<?php echo url('/admin/tpl/mail/index'); ?>"><i class="fa "></i>邮件模版</a></li>
        <li><a href="<?php echo url('/admin/tpl/sms/index'); ?>"><i class="fa "></i>短信模版</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-group"></i> <span>用户</span> 
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('/admin/auth/group/index'); ?>"><i class="fa "></i>管理员用户组</a></li>
        <li><a href="<?php echo url('/admin/auth/admin/index'); ?>"><i class="fa "></i>管理员列表</a></li>
        <li><a href="<?php echo url('/admin/user/index/index'); ?>"><i class="fa "></i>用户列表</a></li>
        <li><a href="<?php echo url('/admin/user/level/index'); ?>"><i class="fa "></i>会员等级</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-inbox"></i> <span>插件</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('/admin/addons/index'); ?>"><i class="fa "></i>插件管理</a></li>
        <li><a href="<?php echo url('/admin/addons/shop'); ?>"><i class="fa "></i>插件商店</a></li>
    </ul>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-hand-o-right"></i> <span>帮助</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="<?php echo url('/admin/help/index'); ?>"><i class="fa "></i>使用帮助</a></li>
    </ul>
</li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <aside class="main-sidebar" style="margin-left: 90px;width: 110px;border-right: 1px solid #eeeeee;">
            <ul class="sidebar-menu" style="margin-top: 6px" id="sidebar-menu-sub">
                <!--sidebar-menu-sub container-->
            </ul>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="pjax-container" style="padding-top: 50px;">
            
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">站点设置</h3>
                </div>
                <!-- form start -->
                <form action="<?php echo url('/admin/config/site/index'); ?>" method="post" class="form-horizontal layui-form">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo (isset($config['id']) && ($config['id'] !== '')?$config['id']:'0'); ?>"
                               type="hidden">
 
                        <div class="form-group">
                            <label class="col-sm-2 control-label">站点名称</label>

                            <div class="col-sm-4">
                                <input type="text" name="title" required  lay-verify="required" placeholder="请输入名称" autocomplete="off" 
                                class="form-control" value="<?php echo (isset($config['title']) && ($config['title'] !== '')?$config['title']:''); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>

                            <div class="col-sm-4">
                                站点名称将显示在浏览器的标题栏
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">关键词</label>

                            <div class="col-sm-4">
                                <input class="form-control" name="keywords" placeholder="" value="<?php echo (isset($config['keywords']) && ($config['keywords'] !== '')?$config['keywords']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">站点Logo</label>

                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($config['logo_id']) || (($config['logo_id'] instanceof \think\Collection || $config['logo_id'] instanceof \think\Paginator ) && $config['logo_id']->isEmpty())): ?>
                                            <img src="__PUBLIC__/static/dist/img/noimage.gif">
                                        <?php else: ?>
                                            <img src="__PUBLIC__/uploads/<?php echo $config['logo']['savepath']; ?><?php echo $config['logo']['savename']; ?>">
                                        <?php endif; ?>
                                        <input class="form-control" name="logo_id" id="file_id" placeholder="" value="<?php echo (isset($config['logo_id']) && ($config['logo_id'] !== '')?$config['logo_id']:''); ?>" type="hidden">
                                        <div class="edit_pic_mask">
                                            <i class="fa fa-plus-circle" onclick="imageUploader(this,false)"></i>
                                            <i class="fa fa-minus-circle" onclick="removeImage(this,false)"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">站点描述</label>

                            <div class="col-sm-6">
                                <textarea class="form-control" name="description" placeholder="" rows="3"><?php echo (isset($config['description']) && ($config['description'] !== '')?$config['description']:''); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">版权</label>

                            <div class="col-sm-6">
                            	<input class="form-control" name="copyright" placeholder="" value="<?php echo (isset($config['copyright']) && ($config['copyright'] !== '')?$config['copyright']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">统计代码</label>

                            <div class="col-sm-6">
                                <textarea class="form-control" name="tongji_code" placeholder="" rows="3"><?php echo (isset($config['tongji_code']) && ($config['tongji_code'] !== '')?$config['tongji_code']:''); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button class="btn btn-block btn-danger" lay-submit lay-filter="shopSet">保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
</section>
<script>
    layui.use('form', function() {
        var form = layui.form();
        form.render(); //更新全部
        //监听提交
        // form.on('submit(shopSet)', function(data) {
            // console.log(data.field);
            // layer.msg(JSON.stringify(data.field));
            // return false;
        // });
    });
</script>

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b>7.0.0
            </div>
            <strong>Copyright &copy; 2014-2017 <a href="http://wemallshop.com/" target="_blank">wemallshop.com</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- Bootstrap 3.3.5 -->
<script src="__PUBLIC__/static/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="__PUBLIC__/static/plugins/select2/select2.full.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="__PUBLIC__/static/plugins/chartjs/Chart.min.js"></script>
<!-- daterangepicker -->
<script src="__PUBLIC__/static/dist/js/moment.min.js"></script>
<script src="__PUBLIC__/static/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="__PUBLIC__/static/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap time picker -->
<script src="__PUBLIC__/static/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Slimscroll -->
<script src="__PUBLIC__/static/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="__PUBLIC__/static/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="__PUBLIC__/static/dist/js/app.js?v=6"></script>
<!--layer-->
<!-- <script src="__PUBLIC__/static/plugins/layer/layer.js"></script> -->
<!--toastr-->
<script src="__PUBLIC__/static/plugins/toastr/toastr.min.js"></script>
<!--bootbox-->
<script src="__PUBLIC__/static/plugins/bootbox/bootbox.js"></script>
<!--pjax-->
<script src="__PUBLIC__/static/plugins/pjax/jquery.pjax.js"></script>
<!--jquery.form-->
<script src="__PUBLIC__/static/plugins/form/jquery.form.js"></script>
<!--wangeditor-->
<!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/static/plugins/wangeditor/css/wangEditor.css"> -->
<!-- <script src="__PUBLIC__/static/plugins/wangeditor/js/wangEditor.js"></script> -->

<!--时间-->
<script src="__PUBLIC__/static/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="__PUBLIC__/static/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>

<!--ueditor-->
<!-- <script type="text/javascript" src="/public/ueditor/ueditor.config.js"></script> -->
<!-- <script type="text/javascript" src="/public/ueditor/ueditor.all.min.js"></script> -->
<!--地图-->
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=8daf0e161f44e7900d2193f85c5cfe1f&plugin=AMap.DistrictSearch"></script>
<script src="__PUBLIC__/static/dist/js/wemall.js?v=114"></script>
</body>
</html>


