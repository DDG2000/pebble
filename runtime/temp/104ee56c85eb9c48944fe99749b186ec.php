<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\pebble\public/../application/admin\view\goods\index_index.html";i:1494918250;}*/ ?>
<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- /.col -->
		<div class="col-md-12">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">商品列表</h3>
				</div>
				<div style="margin-top: 10px;">
                    <div class="btn-group" style="margin-left: 10px;">
                        <a href="<?php echo url('/admin/goods/index/add'); ?>" class="btn btn-danger ">
							新增商品
						</a>
                    </div>
                </div>
				<div class="box-body table-responsive">
					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
								<th class="hidden-xs">
									<label><input onchange="checkAll()" type="checkbox" value=""></label>
								</th>
								<th>id</th>
								<th>名称</th>
								<th>分类</th>
								<th>库存</th>
								<th>重量/数量</th>
								<th>单位</th>
								<th>本店价格</th>
								<th>状态</th>
							</tr>
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?>
							<tr>
								<td class="hidden-xs">
									<label><input name="checkbox" class="check" type="checkbox"
												  value="<?php echo $li['goods_id']; ?>"></label>
								</td>
								<td><?php echo $li['goods_name']; ?></td>
								<td><?php echo $li['category']['name']; ?></td>
								<td><?php echo $li['store_count']; ?></td>
								<td><?php echo $li['amount']; ?></td>
								<td><?php echo $li['unit']; ?></td>
								<td><?php echo $li['shop_price']; ?></td>
								<td>
                                    <?php if($li['status'] == '1'): ?>
                                    	<span class="label label-success">开启</span> 
                                    <?php else: ?>
                                    	<span class="label label-default">关闭</span> 
                                    <?php endif; ?>
                                </td>
								<td class="table-action">
									<a href="<?php echo url('/admin/goods/index/add',array('goods_id'=>$li['goods_id'])); ?>">编辑</a>
									<?php if($li['status'] == '0'): ?>
                                    <a href="<?php echo url('/admin/goods/index/update',array('goods_id'=>$li['goods_id'],'status'=>1)); ?>">开启</a>
                                    <?php else: ?>
                                    <a href="<?php echo url('/admin/goods/index/update',array('goods_id'=>$li['goods_id'],'status'=>0)); ?>">关闭</a>
                                    <?php endif; ?>
								</td>
							</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				<div class="box-footer table-responsive">
					<div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/goods/index/update',array('status'=>1)); ?>')">
                            开启
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/goods/index/update',array('status'=>0)); ?>')">
                            关闭
                        </button>
                    </div>
					<!-- <div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/goods/index/del'); ?>')">删除
                        </button>
                    </div> -->
					<div class="btn-group">
					</div>
					<div class="pull-right">
						<?php echo $list->render(); ?>
					</div>
				</div>
			</div>
			<!-- /. box -->
		</div>
		<!-- /.col -->
	</div>
</section>
<script type="text/javascript">
	
</script>