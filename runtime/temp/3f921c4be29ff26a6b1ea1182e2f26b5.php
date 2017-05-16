<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"F:\pebble\public/../application/admin\view\user\index_index.html";i:1494239574;}*/ ?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">用户管理</h3>
                    <!-- /.box-tools -->
                    <div class="box-tools">
                        <form class="form-horizontal" action="<?php echo url('/admin/user/index/index'); ?>" method="post">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="name" class="form-control pull-right" placeholder="用户名">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div style="margin-top: 10px;">
                    <div class="btn-group" style="margin-left: 10px;">
                        <a href="<?php echo url('/admin/user/index/export'); ?>" target="_blank" class="btn btn-danger ">
                            导出全部用户
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th class="hidden-xs">
                                    <label>
                                        <input onchange="checkAll()" type="checkbox" value="">
                                    </label>
                                </th>
                                <th>编号</th>
                                <th>用户名</th>
                                <th>账户</th>
                                <th>积分</th>
                                <th>等级</th>
                                <th>状态</th>
                                <th>备注</th>
                                <th>注册时间</th>
                                <th>操作</th>
                            </tr>
                            <?php if(is_array($userlist) || $userlist instanceof \think\Collection || $userlist instanceof \think\Paginator): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td class="hidden-xs">
                                    <label>
                                        <input name="checkbox" class="check" type="checkbox" value="<?php echo $user['id']; ?>">
                                    </label>
                                </td>
                                <td><?php echo $user['id']; ?></td>
                                <td>
                                    <?php if(empty($user['avater']) || (($user['avater'] instanceof \think\Collection || $user['avater'] instanceof \think\Paginator ) && $user['avater']->isEmpty())): ?>
                                        <img style="width: 50px;border-radius: 50%;" src="__PUBLIC__/static/dist/img/noimage.gif">
                                    <?php else: ?>
                                        <img style="width: 50px;border-radius: 50%;"
                                        src="__PUBLIC__/uploads/<?php echo $user['avater']['savepath']; ?><?php echo $user['avater']['savename']; ?>">
                                    <?php endif; ?>
                                    <strong><?php echo $user['username']; ?></strong>                                        
                                </td>
                                <td><?php echo $user['money']; ?></td>
                                <td><?php echo $user['score']; ?></td>
                                <td><?php echo $user['level']; ?></td>
                                <td>
                                    <?php if($user['status'] == '1'): ?>
                                        <span class="label label-success">启用</span> 
                                    <?php else: ?>
                                        <span class="label label-default">禁用</span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $user['remark']; ?></td>
                                <td><?php echo $user['created_at']; ?></td>
                                <td class="table-action">
                                    <a href="<?php echo url('/admin/user/index/add',array('id'=>$user['id'])); ?>">修改</a> 
                                    <?php if($user['id'] > '1'): if($user['status'] == '0'): ?>
                                            <a href="<?php echo url('/admin/user/index/update',array('id'=>$user['id'],'status'=>1)); ?>">开启</a> 
                                        <?php else: ?>
                                            <a href="<?php echo url('/admin/user/index/update',array('id'=>$user['id'],'status'=>0)); ?>">关闭</a> 
                                        <?php endif; ?>
                                        <!-- <a href="<?php echo url('admin/user/index/del',array('id'=>$user['id'])); ?>">删除</a>  -->
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer no-padding">
                    <div class="mailbox-controls">
                        <div class="btn-group">
                            <!-- <button type="button" class="btn btn-danger"
                                    onclick="batchUrl('<?php echo url('admin/user/del'); ?>')">全部删除
                            </button> -->
                        </div>
                        <!-- /.btn-group -->
                        <div class="pull-right">
                            <?php echo $userlist->render(); ?>
                        </div>
                        <!-- /.pull-right -->
                    </div>
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>
