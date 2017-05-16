<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"F:\pebble\public/../application/admin\view\auth\admin_index.html";i:1494239574;}*/ ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">管理员管理</h3>
                </div>
                <div style="margin-top: 10px;">
                    <div class="btn-group" style="margin-left: 10px;">
                        <a href="<?php echo url('/admin/auth/admin/add'); ?>" class="btn btn-danger ">
                            新增管理员
                        </a>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <tbody>
                        <tr>
                            <!-- <th class="hidden-xs">
                                <label><input onchange="checkAll()" type="checkbox" value=""></label>
                            </th> -->
                            <th>编号</th>
                            <th>用户名</th>
                            <th>用户组</th>
                            <th>手机号</th>
                            <th>邮箱</th>
                            <th>状态</th>
                            <th>备注</th>
                            <th>最后登录时间</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($adminlist) || $adminlist instanceof \think\Collection || $adminlist instanceof \think\Paginator): $i = 0; $__LIST__ = $adminlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <!-- <td class="hidden-xs">
                                    <label><input name="checkbox" class="check" type="checkbox" value="<?php echo $user['id']; ?>"></label>
                                </td> -->
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td><?php echo $user['group']['title']; ?></td>
                                <td><?php echo $user['mobile']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td>
                                    <?php if($user['status'] == '1'): ?>
                                        <span class="label label-success">启用</span>
                                    <?php else: ?>
                                        <span class="label label-default">禁用</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $user['remark']; ?></td>
                                <td><?php echo $user['last_login_time']; ?></td>
                                <td class="table-action">
                                    <a href="<?php echo url('/admin/auth/admin/add',array('id'=>$user['id'])); ?>">修改</a>
                                    <?php if($user['id'] > '1'): if($user['status'] == '0'): ?>
                                            <a href="<?php echo url('/admin/auth/admin/update',array('id'=>$user['id'],'status'=>1)); ?>">开启</a>
                                        <?php else: ?>
                                            <a href="<?php echo url('/admin/auth/admin/update',array('id'=>$user['id'],'status'=>0)); ?>">关闭</a>
                                        <?php endif; ?>
                                        <a href="<?php echo url('/admin/auth/admin/del',array('id'=>$user['id'])); ?>">删除</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                    <!-- <div class="box-footer no-padding"> -->
                        <!-- <div class="mailbox-controls"> -->
                            <!-- <div class="btn-group"> -->
                                <!-- <button type="button" class="btn btn-danger"
                                        onclick="batchUrl('<?php echo url('/admin/auth/admin/del'); ?>')">全部删除
                                </button> -->
                            <!-- </div> -->
                            <!-- /.btn-group -->
                            <!-- <div class="pull-right"> -->
                                
                            <!-- </div> -->
                            <!-- /.pull-right -->
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>