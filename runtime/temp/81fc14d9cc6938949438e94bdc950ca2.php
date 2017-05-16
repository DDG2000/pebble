<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\pebble\public/../application/admin\view\goods\index_add.html";i:1494922763;}*/ ?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">添加商品</h3>
                </div>
                <!-- form start -->
                <form class="form-horizontal layui-form" action="<?php echo url('/admin/goods/index/add'); ?>" method="post" enctype="text/plain">
                    <div class="box-body">
                        <input class="form-control" name="id" placeholder="" value="<?php echo (isset($goods['goods_id']) && ($goods['goods_id'] !== '')?$goods['goods_id']:0); ?>" type="hidden" >

                        <div class="form-group">
                            <label class="col-sm-2 control-label">名称</label>
                            <div class="col-sm-8"><input class="form-control" name="goods_name" placeholder="" value="<?php echo (isset($goods['goods_name']) && ($goods['goods_name'] !== '')?$goods['goods_name']:'山东红富士'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品编号</label>
                            <div class="col-sm-8"><input class="form-control" name="goods_sn" readonly placeholder="" value="<?php echo (isset($goods['goods_sn']) && ($goods['goods_sn'] !== '')?$goods['goods_sn']:'0001'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">分类</label>
                            <div class="col-sm-8">
                                <select name="category_id" class="form-control">
                                	<?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">点击数</label>
                            <div class="col-sm-8"><input class="form-control" name="click_count" readonly placeholder="" value="<?php echo (isset($goods['click_count']) && ($goods['click_count'] !== '')?$goods['click_count']:'1111'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">库存数量</label>
                            <div class="col-sm-8"><input class="form-control" name="store_count" placeholder="" value="<?php echo (isset($goods['store_count']) && ($goods['store_count'] !== '')?$goods['store_count']:'1111'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">数量单位</label>
                            <div class="col-sm-8"><input class="form-control" name="amount" placeholder="" value="<?php echo (isset($goods['amount']) && ($goods['amount'] !== '')?$goods['amount']:'5kg/袋'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">市场价</label>
                            <div class="col-sm-8"><input class="form-control" name="market_price" placeholder="" value="<?php echo (isset($goods['market_price']) && ($goods['market_price'] !== '')?$goods['market_price']:'50'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">本店价</label>
                            <div class="col-sm-8"><input class="form-control" name="shop_price" placeholder="" value="<?php echo (isset($goods['shop_price']) && ($goods['shop_price'] !== '')?$goods['shop_price']:'45'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品成本价</label>
                            <div class="col-sm-8"><input class="form-control" name="cost_price" placeholder="" value="<?php echo (isset($goods['cost_price']) && ($goods['cost_price'] !== '')?$goods['cost_price']:'20'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品关键词</label>
                            <div class="col-sm-8"><input class="form-control" name="keywords" placeholder="" value="<?php echo (isset($goods['keywords']) && ($goods['keywords'] !== '')?$goods['keywords']:'红富士/山东/苹果'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品简单描述</label>
                            <div class="col-sm-8"><input class="form-control" name="goods_remark" placeholder="" value="<?php echo (isset($goods['goods_remark']) && ($goods['goods_remark'] !== '')?$goods['goods_remark']:'正宗山东烟台东富士'); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品详细描述</label>
                            <div class="col-sm-8" id="UEditor" name="goods_content" type="text/plain" style="height:400px;">
                                 <!-- 加载编辑器的容器 -->
                                <script >
                                    <?php echo (isset($goods['goods_content']) && ($goods['goods_content'] !== '')?$goods['goods_content']:''); ?>
                                </script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品图</label>
                            <div class="col-sm-8">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new img-thumbnail">
                                        <?php if(empty($config['original_img']) || (($config['original_img'] instanceof \think\Collection || $config['original_img'] instanceof \think\Paginator ) && $config['original_img']->isEmpty())): ?>
                                        <img src="__PUBLIC__/static/dist/img/noimage.gif">
                                        <?php else: ?>
                                        <img src="__PUBLIC__/uploads/<?php echo $config['logo']['savepath']; ?><?php echo $config['logo']['savename']; ?>">
                                        <?php endif; ?>
                                        <input class="form-control" name="original_img" id="file_id" placeholder="" value="<?php echo (isset($config['original_img']) && ($config['original_img'] !== '')?$config['original_img']:''); ?>" type="hidden">
                                        <div class="edit_pic_mask">
                                            <i class="fa fa-plus-circle" onclick="imageUploader(this,false)"></i>
                                            <i class="fa fa-minus-circle" onclick="removeImage(this,false)"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">是否上架</label>
                            <div class="col-md-7"><input type="checkbox" name="is_on_sale" lay-skin="switch" value="1" <?php if(!(empty($goods['is_on_sale']) || (($goods['is_on_sale'] instanceof \think\Collection || $goods['is_on_sale'] instanceof \think\Paginator ) && $goods['is_on_sale']->isEmpty()))): ?>checked<?php endif; ?>></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">是否包邮</label>
                            <div class="col-md-7"><input type="checkbox" name="is_free_shipping" lay-skin="switch" value="1" <?php if(!(empty($goods['is_free_shipping']) || (($goods['is_free_shipping'] instanceof \think\Collection || $goods['is_free_shipping'] instanceof \think\Paginator ) && $goods['is_free_shipping']->isEmpty()))): ?>checked<?php endif; ?>></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">是否推荐</label>
                            <div class="col-md-7"><input type="checkbox" name="is_recommend" lay-skin="switch" value="1" <?php if(!(empty($goods['is_recommend']) || (($goods['is_recommend'] instanceof \think\Collection || $goods['is_recommend'] instanceof \think\Paginator ) && $goods['is_recommend']->isEmpty()))): ?>checked<?php endif; ?>></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">是否新品</label>
                            <div class="col-md-7"><input type="checkbox" name="is_new" lay-skin="switch" value="1" <?php if(!(empty($goods['is_new']) || (($goods['is_new'] instanceof \think\Collection || $goods['is_new'] instanceof \think\Paginator ) && $goods['is_new']->isEmpty()))): ?>checked<?php endif; ?>></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">是否热卖</label>
                            <div class="col-md-7"><input type="checkbox" name="is_hot" lay-skin="switch" value="1" <?php if(!(empty($goods['is_hot']) || (($goods['is_hot'] instanceof \think\Collection || $goods['is_hot'] instanceof \think\Paginator ) && $goods['is_hot']->isEmpty()))): ?>checked<?php endif; ?>></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品排序</label>
                            <div class="col-sm-8"><input class="form-control" name="sort" placeholder="" value="<?php echo (isset($goods['sort']) && ($goods['sort'] !== '')?$goods['sort']:'20'); ?>" type="text"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">配送物流</label>
                            <div class="col-sm-8"><input class="form-control" name="shipping_area_ids"  placeholder="" value="<?php echo (isset($goods['shipping_area_ids']) && ($goods['shipping_area_ids'] !== '')?$goods['shipping_area_ids']:'顺丰/EMS'); ?>" type="text"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品上架时间</label>
                            <div class="col-sm-8"><input class="form-control" name="created_at" readonly placeholder="" value="<?php echo (isset($goods['created_at']) && ($goods['created_at'] !== '')?$goods['created_at']:''); ?>" type="text"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">最后更新时间</label>
                            <div class="col-sm-8"><input class="form-control" name="updated_at" readonly placeholder="" value="<?php echo (isset($goods['updated_at']) && ($goods['updated_at'] !== '')?$goods['updated_at']:''); ?>" type="text"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">商品销量</label>
                            <div class="col-sm-8"><input class="form-control" name="sales_sum" readonly placeholder="" value="<?php echo (isset($goods['sales_sum']) && ($goods['sales_sum'] !== '')?$goods['sales_sum']:''); ?>" type="text"></div>
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
    if('<?php echo (isset($goods['category_id']) && ($goods['category_id'] !== '')?$goods['category_id']:''); ?>'){
        $('select[name="category_id"]').val('<?php echo (isset($goods['category_id']) && ($goods['category_id'] !== '')?$goods['category_id']:''); ?>');
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
