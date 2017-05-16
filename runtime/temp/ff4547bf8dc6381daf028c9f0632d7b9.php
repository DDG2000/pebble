<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"F:\pebble\public/../application/admin\view\wx\tplmsg_index.html";i:1494239574;}*/ ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="callout callout-danger">
                <p>微信模板消息请设置所在行业为IT科技/互联网|电子商务，消费品/消费品</p>
                <p>无法自动添加的用户请在微信后台手动添加设置</p>
            </div>
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">微信模版消息列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                        <div class="btn-group">
                            <!-- <a href="<?php echo url('/admin/wx/tplmsg/add'); ?>" class="btn btn-danger ">
                                新增模版消息
                            </a> -->
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <div class="table-responsive" style="overflow-x: visible;">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <th class="hidden-xs">
                                    <label><input onchange="checkAll()" type="checkbox" value=""></label>
                                </th>
                                <th>ID</th>
                                <th>模版类型</th>
                                <th>模版编号</th>
                                <th>模版标题</th>
                                <th>备注</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>

                            <?php if(is_array($tplmsglist) || $tplmsglist instanceof \think\Collection || $tplmsglist instanceof \think\Paginator): $i = 0; $__LIST__ = $tplmsglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tplmsg): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td class="hidden-xs">
                                        <label><input name="checkbox" class="check" type="checkbox"
                                                      value="<?php echo $tplmsg['id']; ?>"></label>
                                    </td>
                                    <td><?php echo $tplmsg['id']; ?></td>
                                    <td><?php echo $tplmsg['name']; ?></td>
                                    <td><?php echo $tplmsg['template_id_short']; ?></td>
                                    <!-- <td><?php echo substr($tplmsg['title'],0,12); ?></td> -->
                                    <td><?php echo $tplmsg['title']; ?></td>
                                    <td><?php echo $tplmsg['remark']; ?></td>
                                    <td>
                                    	<?php if($tplmsg['status'] == '1'): ?>
                                            <span class="label label-success">开启</span> 
                                        <?php else: ?>
                                            <span class="label label-default">关闭</span> 
                                        <?php endif; ?> 
                                    </td>
                                    <td class="table-action">
                                        <a href="<?php echo url('/admin/wx/tplmsg/add',array('id'=>$tplmsg['id'])); ?>">编辑</a>
                                        <?php if($tplmsg['status'] == '0'): ?>
                                        <a href="<?php echo url('/admin/wx/tplmsg/update',array('id'=>$tplmsg['id'],'status'=>1)); ?>">开启</a> 
                                        <?php else: ?>
                                        <a href="<?php echo url('/admin/wx/tplmsg/update',array('id'=>$tplmsg['id'],'status'=>0)); ?>">关闭</a> 
                                        <?php endif; ?> 
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div class="box-footer no-padding">
                            <div class="mailbox-controls">
                                <div class="btn-group">
                                    <!-- <button type="button" class="btn btn-danger"
                                            onclick="batchUrl('<?php echo url('/admin/wx/tplmsg/del'); ?>')">删除选中
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
</section>