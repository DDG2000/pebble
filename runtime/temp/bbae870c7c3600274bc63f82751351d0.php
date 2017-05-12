<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"F:\mytest\wemall\public/../application/admin\view\wx\kefu_index.html";i:1494239574;}*/ ?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-danger">
                <p>微信转接客服，转接到配置客服，不设置将随机转接。详细可见官方说明文档http://dkf.qq.com/faq-1_1.html。</p>
            </div>
            <!-- general form elements -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">微信多客服设置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal layui-form" action="<?php echo url('/admin/wx/kefu/index'); ?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo $kefu['id']; ?>"
                               type="hidden">

                        <div class="form-group">
                            <label class="control-label col-md-2">状态</label>

                            <div class="col-md-7">
                                <input type="checkbox" name="status" lay-skin="switch" value="1"
                                <?php if(!(empty($kefu['status']) || (($kefu['status'] instanceof \think\Collection || $kefu['status'] instanceof \think\Paginator ) && $kefu['status']->isEmpty()))): ?>checked<?php endif; ?>>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">转接客服(微信号)</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="kefu" placeholder="" value="<?php echo $kefu['kefu']; ?>"
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
