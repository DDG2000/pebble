<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"F:\mytest\wemall\public/../application/admin\view\article\category_index.html";i:1494239574;}*/ ?>
<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- /.col -->
		<div class="col-md-12">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">文章分类</h3>
				</div>
				<div style="margin-top: 10px;">
                    <div class="btn-group" style="margin-left: 10px;">
                        <a href="<?php echo url('/admin/article/category/add'); ?>" class="btn btn-danger ">
							新增分类
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
								<th>编号</th>
								<th>名称</th>
								<th>状态</th>
								<th>备注</th>
								<th>操作</th>
							</tr>
							<?php if(is_array($categorylist) || $categorylist instanceof \think\Collection || $categorylist instanceof \think\Paginator): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?>
								<tr>
									<td class="hidden-xs">
										<label><input name="checkbox" class="check" type="checkbox"
													  value="<?php echo $category['id']; ?>"></label>
									</td>
									<td>
										<?php echo $category['id']; ?>
									</td>
									<td>
										<?php echo $category['name']; ?>
									</td>
									<td>
	                                    <?php if($category['status'] == '1'): ?>
	                                    	<span class="label label-success">开启</span> 
	                                    <?php else: ?>
	                                    	<span class="label label-default">关闭</span> 
	                                    <?php endif; ?>
	                                </td>
									<td>
										<?php echo $category['remark']; ?>
									</td>
									<td class="table-action">
										<a href="<?php echo url('/admin/article/category/add',array('id'=>$category['id'])); ?>">编辑</a>
										<?php if($category['status'] == '0'): ?>
	                                    <a href="<?php echo url('/admin/article/category/update',array('id'=>$category['id'],'status'=>1)); ?>">开启</a> 
	                                    <?php else: ?>
	                                    <a href="<?php echo url('/admin/article/category/update',array('id'=>$category['id'],'status'=>0)); ?>">关闭</a> 
	                                    <?php endif; ?>
	                                    <!-- <a href="<?php echo url('/admin/article/category/del',array('id'=>$category['id'])); ?>">删除</a> -->
									</td>
								</tr>
								<?php if(is_array($category['sub']) || $category['sub'] instanceof \think\Collection || $category['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $category['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category1): $mod = ($i % 2 );++$i;?>
									<tr>
										<td class="hidden-xs">
											<label><input name="checkbox" class="check" type="checkbox"
														  value="<?php echo $category1['id']; ?>"></label>
										</td>
										<td>
											<?php echo $category1['id']; ?>
										</td>
										<td>
											|─<?php echo $category1['name']; ?>
										</td>
										<td>
		                                    <?php if($category1['status'] == '1'): ?>
		                                    	<span class="label label-success">开启</span> 
		                                    <?php else: ?>
		                                    	<span class="label label-default">关闭</span> 
		                                    <?php endif; ?>
		                                </td>
										<td>
											<?php echo $category1['remark']; ?>
										</td>
										<td class="table-action">
	                                        <a href="<?php echo url('/admin/article/category/add',array('id'=>$category1['id'])); ?>">编辑</a>
	                                        <?php if($category1['status'] == '0'): ?>
		                                    <a href="<?php echo url('/admin/article/category/update',array('id'=>$category1['id'],'status'=>1)); ?>">开启</a> 
		                                    <?php else: ?>
		                                    <a href="<?php echo url('/admin/article/category/update',array('id'=>$category1['id'],'status'=>0)); ?>">关闭</a> 
		                                    <?php endif; ?>
	                                        <!-- <a href="<?php echo url('/admin/article/category/del',array('id'=>$category1['id'])); ?>">删除</a> -->
										</td>
									</tr>
								<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				<div class="box-footer table-responsive">
                	<div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/article/category/update',array('status'=>1)); ?>')">
                            开启
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/article/category/update',array('status'=>0)); ?>')">
                            关闭
                        </button>
                    </div>
                    <!-- <div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/article/category/del'); ?>')">删除
                        </button>
                    </div> -->
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