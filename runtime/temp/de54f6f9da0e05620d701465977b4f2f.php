<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"F:\mytest\wemall\public/../application/admin\view\auth\group_index.html";i:1494239574;}*/ ?>

<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">用户组管理</h3>
                </div>
                <div style="margin-top: 10px;">
                    <div class="btn-group" style="margin-left: 10px;">
                        <a href="<?php echo url('/admin/auth/group/add'); ?>" class="btn btn-danger ">
                            新增用户组
                        </a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <tbody>
                        <tr>
                            <th>编号</th>
                            <th>用户组</th>
                            <th>状态</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($grouplist) || $grouplist instanceof \think\Collection || $grouplist instanceof \think\Paginator): $i = 0; $__LIST__ = $grouplist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$group): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td><?php echo $group['id']; ?></td>
                                <td><?php echo $group['title']; ?></td>
                                <td>
                                    <?php if($group['status'] == '1'): ?>
                                        <span class="label label-success">启用</span>
                                    <?php else: ?>
                                        <span class="label label-default">禁用</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $group['created_at']; ?></td>
                                <td class="table-action">
                                    <a href="<?php echo url('/admin/auth/group/add',array('id'=>$group['id'])); ?>">修改</a>
                                    <?php if($group['id'] > '1'): if($group['status'] == '0'): ?>
                                            <a href="<?php echo url('/admin/auth/group/update',array('id'=>$group['id'],'status'=>1)); ?>">开启</a>
                                        <?php else: ?>
                                            <a href="<?php echo url('/admin/auth/group/update',array('id'=>$group['id'],'status'=>0)); ?>">关闭</a>
                                        <?php endif; ?>
                                        <a href="<?php echo url('/admin/auth/group/del',array('id'=>$group['id'])); ?>">删除</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>