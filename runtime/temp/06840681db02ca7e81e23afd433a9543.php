<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"F:\pebble\public/../application/admin\view\wx\reply_add.html";i:1494239574;}*/ ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">新增微信自定义回复</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal layui-form" method="post" action="<?php echo url('/admin/wx/reply/add'); ?>">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo (isset($reply['id']) && ($reply['id'] !== '')?$reply['id']:0); ?>"
                               type="hidden">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="title" placeholder="" value="<?php echo (isset($reply['title']) && ($reply['title'] !== '')?$reply['title']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">类型</label>

                            <div class="col-sm-10">
                                <input type="radio" name="type" value="news" lay-filter="type" title="图文"
                                <?php if((isset($reply['type']) && ($reply['type'] !== '')?$reply['type']:'news') == 'news'): ?>checked<?php endif; ?>>
                                <input type="radio" name="type" value="text" lay-filter="type" title="文本" 
                                <?php if((isset($reply['type']) && ($reply['type'] !== '')?$reply['type']:'') == 'text'): ?>checked<?php endif; ?>>
                            </div>
                        </div>
                        
                        <div class="form-group news" <?php if((isset($reply['type']) && ($reply['type'] !== '')?$reply['type']:'news') != 'news'): ?>style="display: none;"<?php endif; ?>>
                            <label class="col-sm-2 control-label">描述</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="description"
                                          rows="3"><?php echo (isset($reply['description']) && ($reply['description'] !== '')?$reply['description']:''); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group news" <?php if((isset($reply['type']) && ($reply['type'] !== '')?$reply['type']:'news') != 'news'): ?>style="display: none;"<?php endif; ?>>
                            <label class="col-sm-2 control-label">图片</label>

                            <div class="col-sm-10">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($reply['file_id']) || (($reply['file_id'] instanceof \think\Collection || $reply['file_id'] instanceof \think\Paginator ) && $reply['file_id']->isEmpty())): ?>
                                            <img src="__PUBLIC__/static/dist/img/noimage.gif">
                                        <?php else: ?>
                                            <img src="__PUBLIC__/uploads/<?php echo $reply['file']['savepath']; ?><?php echo $reply['file']['savename']; ?>">
                                        <?php endif; ?>
                                        <input class="form-control" name="file_id" id="file_id" placeholder=""
                                               value="<?php echo (isset($reply['file_id']) && ($reply['file_id'] !== '')?$reply['file_id']:''); ?>"
                                               type="hidden">

                                        <div class="edit_pic_mask">
                                            <i class="fa fa-plus-circle" onclick="imageUploader(this,false)"></i>
                                            <i class="fa fa-minus-circle" onclick="removeImage(this,false)"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group news" <?php if((isset($reply['type']) && ($reply['type'] !== '')?$reply['type']:'news') != 'news'): ?>style="display: none;"<?php endif; ?>>
                            <label class="col-sm-2 control-label">链接</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="url" placeholder="" value="<?php echo (isset($reply['url']) && ($reply['url'] !== '')?$reply['url']:''); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">关键词</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="key" placeholder="" value="<?php echo (isset($reply['key']) && ($reply['key'] !== '')?$reply['key']:''); ?>"
                                       type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo (isset($reply['remark']) && ($reply['remark'] !== '')?$reply['remark']:''); ?>"
                                       type="text">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger" lay-submit lay-filter="addreply">保存</button>
                        </div>

                        <div class="col-sm-2">
                            <button type="button" class="btn btn-block btn-default" onclick="history.go(-1)">取消</button>
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
    $(function () {
        layui.use('form', function() {
            var form = layui.form();
            form.render('radio'); //更新全部
            form.on('radio(type)', function(data){
                if (data.value == "news") {
                    $('.news').show();
                } else {
                    $('.news').hide();
                }
            });
        });
    });
</script>


