<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"F:\mytest\wemall\public/../application/admin\view\public_login.html";i:1494239574;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WeMall微商城</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="__PUBLIC__/static/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="__PUBLIC__/static/dist/css/AdminLTE.css">
    <!-- layui -->
    <link rel="stylesheet" href="__PUBLIC__/static/layui/css/layui.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/static/dist/js/html5shiv.min.js"></script>
    <script src="/static/dist/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page" style="background-image:url(__PUBLIC__/static/wallpage/bg_<?php echo rand(1,8); ?>.jpg);background-size: cover;">
    <div class="login-box">
        <div class="login-box-body">
            <div class="login-logo" style="margin: 30px 10px">
                <img src="__PUBLIC__/static/dist/img/logo.png">
            </div>
            <form class="layui-form">
                <div class="form-group has-feedback">
                    <input type="text" name="username" required lay-verify="required" placeholder="用户名" class="layui-input">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" required lay-verify="required" placeholder="密码" class="layui-input">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" id="changeVerity">
                    <input type="text" name="verify" required lay-verify="required" placeholder="验证码" class="layui-input" style="width: 70%;float: left">
                    <img src="<?php echo captcha_src(); ?>?t=<?php echo rand(10000,99999); ?>" alt="captcha" class="yzm-img" style="width: 30%;border: 1px solid #ccc;height: 38px;border-left: 0px;cursor:pointer" onclick="this.src='<?php echo captcha_src(); ?>'+'?t='+Math.random()" />
                </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4">
                        <button class="btn btn-primary btn-block btn-flat" lay-submit lay-filter="login">登录</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="common_footer">Powered by WeMall | Copyright © <a href="http://www.wemallshop.com/" style="color: white;" target="_blank">wemallshop.com</a> All rights reserved.
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="__PUBLIC__/static/dist/js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="__PUBLIC__/static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- layui -->
    <script src="__PUBLIC__/static/layui/layui.js"></script>
    <script>
    $('#changeVerity').click(function() {
        $(this).find('img').attr('src', '<?php echo captcha_src(); ?>?' + Math.random());
    });
    layui.use('form', function() {
        var form = layui.form();

        //监听提交
        form.on('submit(login)', function(data) {
            // layer.msg(JSON.stringify(data.field));
            $.ajax({
                type: "post",
                url: "<?php echo url('admin/public/login'); ?>",
                data: data.field,
                success: function(data) {
                    layer.msg(data.msg);
                    if (data.status) {
                        location.href = "<?php echo url('admin/index/index'); ?>";
                    }
                },
                beforeSend: function() {

                },
                complete: function() {

                }

            });
            return false;
        });
    });
    </script>
</body>

</html>
