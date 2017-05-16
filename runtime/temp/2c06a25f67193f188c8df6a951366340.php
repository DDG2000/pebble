<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"F:\pebble\public/../application/admin\view\wx\reply_index.html";i:1494239574;}*/ ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="callout callout-danger">
                <p>关键词:subscribe 设置关注自动回复</p>
            </div>
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">微信自定义回复</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                        <div class="btn-group">
                            <a href="<?php echo url('/admin/wx/reply/add'); ?>" class="btn btn-danger ">
                                新增自定义回复
                            </a>
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
                                <th>类型</th>
                                <th>标题</th>
                                <th>描述</th>
                                <th>图片</th>
                                <th>链接</th>
                                <th>关键词</th>
                                <th>备注</th>
                                <th>操作</th>
                            </tr>

                            <?php if(is_array($replylist) || $replylist instanceof \think\Collection || $replylist instanceof \think\Paginator): $i = 0; $__LIST__ = $replylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$replylist): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td class="hidden-xs">
                                        <label><input name="checkbox" class="check" type="checkbox"
                                                      value="<?php echo $replylist['id']; ?>"></label>
                                    </td>
                                    <td><?php echo $replylist['id']; ?></td>
                                    <td>
                                        <?php if((isset($replylist['type']) && ($replylist['type'] !== '')?$replylist['type']:'') == 'news'): ?>图文<?php endif; if((isset($replylist['type']) && ($replylist['type'] !== '')?$replylist['type']:'') == 'text'): ?>文本<?php endif; ?>
                                    </td>
                                    <td><?php echo substr($replylist['title'],0,12); ?></td>
                                    <td><?php echo substr($replylist['description'],0,12); ?></td>
                                    <td>
                                        <div class="btn-group" style="margin: 0px;">
                                            <?php if(empty($replylist['file_id']) || (($replylist['file_id'] instanceof \think\Collection || $replylist['file_id'] instanceof \think\Paginator ) && $replylist['file_id']->isEmpty())): ?>
                                                <img style="height: 50px" src="__PUBLIC__/static/dist/img/noimage.gif">
                                            <?php else: ?>
                                                <img style="height: 50px"
                                                src="__PUBLIC__/uploads/<?php echo $replylist['file']['savepath']; ?><?php echo $replylist['file']['savename']; ?>">
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td><?php echo $replylist['url']; ?></td>
                                    <td><?php echo $replylist['key']; ?></td>
                                    <td><?php echo $replylist['remark']; ?></td>
                                    <td class="table-action"><a
                                            href="<?php echo url('/admin/wx/reply/add',array('id'=>$replylist['id'])); ?>">修改</a><a
                                            href="<?php echo url('/admin/wx/reply/del',array('id'=>$replylist['id'])); ?>">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <div class="box-footer no-padding">
                            <div class="mailbox-controls">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger"
                                            onclick="batchUrl('<?php echo url('/admin/wx/reply/del'); ?>')">全部删除
                                    </button>
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