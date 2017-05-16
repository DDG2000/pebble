<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"F:\pebble\public/../application/admin\view\config\sms_index.html";i:1494239574;}*/ ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-danger">
                <p>目前仅支持阿里大于 网站:
                    <a href="http://www.alidayu.com/" target="_blank">http://www.alidayu.com/</a>
                </p>
                <p>应用管理－应用列表－创建应用</p>
                <p>配置管理－验证码－配置短信签名－添加签名</p>
                <p>配置管理－验证码－配置短信模版－添加模版</p>
            </div>
            <!-- general form elements -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">短信验证设置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?php echo url('/admin/config/sms/index'); ?>">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo $sms['id']; ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">App Key</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="app_key" placeholder="" value="<?php echo $sms['app_key']; ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">App Secret</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="app_secret" placeholder="" value="<?php echo $sms['app_secret']; ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">短信签名</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="sign" placeholder="" value="<?php echo $sms['sign']; ?>"
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

