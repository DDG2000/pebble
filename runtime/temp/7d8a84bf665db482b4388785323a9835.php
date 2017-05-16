<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\pebble\public/../application/admin\view\config\site_index.html";i:1494239574;}*/ ?>

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
