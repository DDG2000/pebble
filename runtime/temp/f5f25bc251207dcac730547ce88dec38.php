<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\pebble\public/../application/admin\view\wx\config_index.html";i:1494239574;}*/ ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">微信设置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?php echo url('/admin/wx/config/index'); ?>">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo (isset($config['id']) && ($config['id'] !== '')?$config['id']:1); ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="control-label col-md-2">url</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="url" placeholder="" disabled value="<?php echo (isset($url) && ($url !== '')?$url:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">token</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="token" placeholder="" value="<?php echo (isset($config['token']) && ($config['token'] !== '')?$config['token']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">appid</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="appid" placeholder="" value="<?php echo (isset($config['appid']) && ($config['appid'] !== '')?$config['appid']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">appsecret</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="appsecret" placeholder="" value="<?php echo (isset($config['appsecret']) && ($config['appsecret'] !== '')?$config['appsecret']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">encodingaeskey</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="encodingaeskey" placeholder=""
                                       value="<?php echo (isset($config['encodingaeskey']) && ($config['encodingaeskey'] !== '')?$config['encodingaeskey']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">公众号原始ID</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="old_id" placeholder=""
                                       value="<?php echo (isset($config['old_id']) && ($config['old_id'] !== '')?$config['old_id']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">appid(小程序)</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="x_appid" placeholder="" value="<?php echo (isset($config['x_appid']) && ($config['x_appid'] !== '')?$config['x_appid']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">appsecret(小程序)</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="x_appsecret" placeholder="" value="<?php echo (isset($config['x_appsecret']) && ($config['x_appsecret'] !== '')?$config['x_appsecret']:''); ?>"
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

