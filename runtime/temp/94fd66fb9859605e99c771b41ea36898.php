<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"F:\pebble\public/../application/admin\view\article\index_index.html";i:1495012978;}*/ ?>
<!-- Main content -->
<section class="content">
	<div class="row">
		<!-- /.col -->
		<div class="col-md-12">
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">文章列表</h3>
				</div>
				<div style="margin-top: 10px;">
                    <div class="btn-group" style="margin-left: 10px;">
                        <a href="<?php echo url('/admin/article/index/add'); ?>" class="btn btn-danger ">
							新增文章
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
								<th>标题</th>
								<th>分类</th>
								<th>作者</th>
								<th>状态</th>
								<th>备注</th>
								<th>时间</th>
								<th>修改时间</th>
								<th>操作</th>
							</tr>
							<?php if(is_array($articlelist) || $articlelist instanceof \think\Collection || $articlelist instanceof \think\Paginator): $i = 0; $__LIST__ = $articlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>
							<tr>
								<td class="hidden-xs">
									<label><input name="checkbox" class="check" type="checkbox"
												  value="<?php echo $article['id']; ?>"></label>
								</td>
								<td>
									<?php echo $article['id']; ?>
								</td>
								<td>
									《<?php echo $article['title']; ?>》
								</td>
								<td>
									<?php echo $article['category']['name']; ?>
								</td>
								<td>
									<?php echo $article['author']; ?>
								</td>
								<td>
                                    <?php if($article['status'] == '1'): ?>
                                    	<span class="label label-success">开启</span> 
                                    <?php else: ?>
                                    	<span class="label label-default">关闭</span> 
                                    <?php endif; ?>
                                </td>
								<td>
									<?php echo $article['remark']; ?>
								</td>
								<td>
									<?php echo $article['created_at']; ?>
								</td>
								<td>
									<?php echo $article['updated_at']; ?>
								</td>
								<td class="table-action">
									<a href="<?php echo url('/admin/article/index/add',array('id'=>$article['id'])); ?>">编辑</a>
									<?php if($article['status'] == '0'): ?>
                                    <a href="<?php echo url('/admin/article/index/update',array('id'=>$article['id'],'status'=>1)); ?>">开启</a> 
                                    <?php else: ?>
                                    <a href="<?php echo url('/admin/article/index/update',array('id'=>$article['id'],'status'=>0)); ?>">关闭</a> 
                                    <?php endif; ?>
									<!-- <a href="<?php echo url('/admin/article/index/del',array('id'=>$article['id'])); ?>">删除</a> -->
								</td>
							</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				<div class="box-footer table-responsive">
					<div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/article/index/update',array('status'=>1)); ?>')">
                            开启
                        </button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/article/index/update',array('status'=>0)); ?>')">
                            关闭
                        </button>
                    </div>
					<!-- <div class="btn-group">
                        <button type="button" class="btn btn-danger"
                                onclick="batchUrl('<?php echo url('/admin/article/index/del'); ?>')">删除
                        </button>
                    </div> -->
					<div class="btn-group">
					</div>
					<div class="pull-right">
						<?php echo $articlelist->render(); ?>
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