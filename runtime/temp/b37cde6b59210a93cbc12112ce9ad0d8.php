<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"F:\mytest\wemall\public/../application/admin\view\wx\print_index.html";i:1494239574;}*/ ?>
<style>
    .print_buy{
        text-decoration: none;
        background-color: hsla(0,0%,100%,.2);
    }
    .print_buy:hover {
        color: #eee;
        border: 1px solid white;
    }
</style>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-danger">
                <p>目前仅支持易联云微信打印机:
                    <a href="https://www.koahub.com/home/product/83" target="_blank">
                        <button type="button" class="btn print_buy">我要购买</button>
                    </a>
                </p>
            </div>
            <!-- general form elements -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">微信打印机设置</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal layui-form" action="<?php echo url('/admin/wx/print/index'); ?>" method="post">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo $print['id']; ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="control-label col-md-2">自动打印</label>

                            <div class="col-md-7">
                                <input type="checkbox" name="switch" lay-skin="switch" value="1"
                                <?php if(!(empty($print['switch']) || (($print['switch'] instanceof \think\Collection || $print['switch'] instanceof \think\Paginator ) && $print['switch']->isEmpty()))): ?>checked<?php endif; ?>>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">用户id</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="partner" placeholder="" value="<?php echo $print['partner']; ?>"
                                       type="text">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">API 密钥</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="apikey" placeholder="" value="<?php echo $print['apikey']; ?>"
                                       type="text">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">终端号</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="machine_code" placeholder=""
                                       value="<?php echo $print['machine_code']; ?>"
                                       type="text">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-2">密钥</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="mkey" placeholder="" value="<?php echo $print['mkey']; ?>"
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
