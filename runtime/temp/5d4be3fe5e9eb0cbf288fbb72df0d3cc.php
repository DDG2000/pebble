<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"F:\pebble\public/../application/admin\view\goods\category_index.html";i:1495077641;}*/ ?>
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
                        <a href="<?php echo url('/goods/index/add'); ?>" class="btn btn-danger ">
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
								<th>分类名称</th>
								<th>排序</th>
								<th>是否上架</th>
								<th>图片</th>
								<th>是否热销</th>
								<th>创建时间</th>
								<th>操作</th>
							</tr>
							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?>
							<tr>
								<td class="hidden-xs">
									<label><input name="checkbox" class="check" type="checkbox"
												  value="<?php echo $li['id']; ?>"></label>
								</td>
								<td><?php echo $li['id']; ?></td>
								<td><?php echo $li['name']; ?></td>
								<td><?php echo $li['sort_order']; ?></td>
								<td>
                                    <?php if($li['on_sale'] == '1'): ?>
                                    	<span class="label label-success">上架</span>
                                    <?php else: ?>
                                    	<span class="label label-default">关闭</span>
                                    <?php endif; ?>
                                </td>
								<td><?php echo $li['image']; ?></td>
								<td><?php echo $li['is_hot']; ?></td>
								<td><?php echo $li['created_at']; ?></td>
								<td class="table-action">
									<a href="<?php echo url('/goods/category/add',array('id'=>$li['id'])); ?>">编辑</a>
									<?php if($li['on_sale'] == '0'): ?>
                                    <a href="<?php echo url('/goods/category/update',array('id'=>$li['id'],'on_sale'=>1)); ?>">开启</a>
                                    <?php else: ?>
                                    <a href="<?php echo url('/goods/category/update',array('id'=>$li['id'],'on_sale'=>0)); ?>">关闭</a>
                                    <?php endif; ?>
									<!--<a href="<?php echo url('/goods/category/del',array('id'=>$li['id'])); ?>">删除</a>-->
								</td>
							</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				<div class="box-footer table-responsive">
					<div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/goods/category/update',array('status'=>1)); ?>')">
                            开启
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/goods/category/update',array('status'=>0)); ?>')">
                            关闭
                        </button>
                    </div>
					<!--<div class="btn-group">-->
                        <!--<button type="button" class="btn btn-danger"-->
                                <!--onclick="batchUrl('<?php echo url('/goods/category/del'); ?>')">删除-->
                        <!--</button>-->
                    <!--</div>-->
					<div class="btn-group">
					</div>
					<div class="pull-right">
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