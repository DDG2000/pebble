<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\pebble\public/../application/admin\view\config\mail_index.html";i:1494239574;}*/ ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">邮件配置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal layui-form" method="post" action="<?php echo url('/admin/config/mail/index'); ?>">
                    <div class="box-body">

                        <input class="form-control" name="id" placeholder="" value="<?php echo $mail['id']; ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">服务器地址</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="host" placeholder="" value="<?php echo $mail['host']; ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">服务器端口</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="port" placeholder="" value="<?php echo $mail['port']; ?>"
                                       type="number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">加密</label>

                            <div class="col-md-7">
                                <input type="checkbox" name="secure" lay-skin="switch" value="1"
                                <?php if(!(empty($mail['secure']) || (($mail['secure'] instanceof \think\Collection || $mail['secure'] instanceof \think\Paginator ) && $mail['secure']->isEmpty()))): ?>checked<?php endif; ?>>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">回信地址</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="replyTo" placeholder="" value="<?php echo $mail['replyTo']; ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">用户名</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="user" placeholder="" value="<?php echo $mail['user']; ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">密码</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="pass" placeholder="" value="<?php echo $mail['pass']; ?>"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger">保存</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (right) -->
    </div>
</section>
<script type="text/javascript">
    layui.use('form', function() {
        var form = layui.form();
        form.render(); //更新全部
    });
</script>
