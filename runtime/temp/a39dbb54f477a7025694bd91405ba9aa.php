<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\pebble\public/../application/admin\view\article\index_add.html";i:1494239574;}*/ ?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">编辑文章</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal layui-form" action="<?php echo url('/admin/article/index/add'); ?>" method="post" enctype="text/plain">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo (isset($article['id']) && ($article['id'] !== '')?$article['id']:0); ?>"
                               type="hidden">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">分类</label>

                            <div class="col-sm-10">
                                <select name="category_id" class="form-control">
                                	<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                        <?php if(is_array($category['sub']) || $category['sub'] instanceof \think\Collection || $category['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $category['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?>
                                            <option value="<?php echo $sub['id']; ?>">|─<?php echo $sub['name']; ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">标题</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="title" placeholder="" value="<?php echo (isset($article['title']) && ($article['title'] !== '')?$article['title']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">作者</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="author" placeholder="" value="<?php echo (isset($article['author']) && ($article['author'] !== '')?$article['author']:''); ?>"
                                       type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">简介</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" name="sub"
                                          rows="3"><?php echo (isset($article['sub']) && ($article['sub'] !== '')?$article['sub']:''); ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容</label>

                            <div class="col-sm-10">
                                 <!-- 加载编辑器的容器 -->
                                <script id="UEditor" name="content" type="text/plain" style="height:400px;">
                                    <?php echo (isset($article['content']) && ($article['content'] !== '')?$article['content']:''); ?>
                                </script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">备注</label>

                            <div class="col-sm-10">
                                <input class="form-control" name="remark" placeholder="" value="<?php echo (isset($article['remark']) && ($article['remark'] !== '')?$article['remark']:''); ?>"
                                       type="text">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-2">状态</label>

                            <div class="col-md-7">
                                <input type="checkbox" name="status" lay-skin="switch" value="1"
                                <?php if(!(empty($article['status']) || (($article['status'] instanceof \think\Collection || $article['status'] instanceof \think\Paginator ) && $article['status']->isEmpty()))): ?>checked<?php endif; ?>>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-block btn-danger">保存</button>
                        </div>

                        <div class="col-sm-2">
                            <button type="button" class="btn btn-block btn-default" onclick="history.go(-1)">取消
                            </button>
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
    if('<?php echo (isset($article['category_id']) && ($article['category_id'] !== '')?$article['category_id']:''); ?>'){
        $('select[name="category_id"]').val('<?php echo (isset($article['category_id']) && ($article['category_id'] !== '')?$article['category_id']:''); ?>');
    }
    
    $(function () {
        var editor = new UE.ui.Editor();
        editor.render("UEditor");
        layui.use('form', function() {
            var form = layui.form();
            form.render(); //更新全部
        });
    });
</script>
