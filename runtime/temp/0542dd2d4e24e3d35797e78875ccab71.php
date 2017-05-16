<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"F:\pebble\public/../application/admin\view\user\level_index.html";i:1494239574;}*/ ?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">会员等级</h3>
                    <!-- /.box-tools -->
                </div>
                <div style="margin-top: 10px;">
                    <div class="btn-group" style="margin-left: 10px;">
                        <a href="<?php echo url('/admin/user/level/add'); ?>" class="btn btn-danger ">
                            新增等级
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <tbody>
                        <tr>
                            <th>
                                <label><input onchange="checkAll()" type="checkbox" value=""></label>
                            </th>
                            <th>编号</th>
                            <th>名称</th>
                            <th>积分(大于等于)</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>

                        <?php if(is_array($levellist) || $levellist instanceof \think\Collection || $levellist instanceof \think\Paginator): $i = 0; $__LIST__ = $levellist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$level): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td>
                                    <label><input name="checkbox" class="check" type="checkbox" value="<?php echo $level['id']; ?>"></label>
                                </td>
                                <td><?php echo $level['id']; ?></td>
                                <td><?php echo $level['name']; ?></td>
                                <td>>=  <?php echo $level['score']; ?></td>
                                <td><?php echo $level['created_at']; ?></td>
                                <td class="table-action">
                                    <a href="<?php echo url('/admin/user/level/add',array('id'=>$level['id'])); ?>">编辑</a> 
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody>
                    </table>
                </div>
                <div class="box-footer no-padding">
                    <div class="mailbox-controls">
                        <div class="btn-group">

                        </div>
                        <div class="btn-group">
                            
                        </div>
                        <div class="pull-right">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>