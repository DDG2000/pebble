<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"F:\pebble\public/../application/admin\view\wx\menu_index.html";i:1494239574;}*/ ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-danger">
                <p>关键词:qqkf 设置qq客服,备注设置qq号</p>
            </div>

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">微信菜单管理</h3>
                </div>
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                        <div class="btn-group">
                            <a href="<?php echo url('/admin/wx/menu/add'); ?>" class="btn btn-danger ">
                                新增菜单
                            </a>
                        </div>
                    </div>
                    <div class="table-responsive" style="overflow-x: visible;">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <th class="hidden-xs">
                                    <label><input onchange="checkAll()" type="checkbox" value=""></label>
                                </th>
                                <th>ID</th>
                                <th>PID(上级)</th>
                                <th>菜单名称</th>
                                <th>类型</th>
                                <th>URL</th>
                                <th>关键词</th>
                                <th>排序</th>
                                <th>备注</th>
                                <th>操作</th>
                            </tr>
                            <?php if(is_array($menulist) || $menulist instanceof \think\Collection || $menulist instanceof \think\Paginator): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td class="hidden-xs">
                                        <label><input name="checkbox" class="check" type="checkbox" value="<?php echo $menu['id']; ?>"></label>
                                    </td>
                                    <td><?php echo $menu['id']; ?></td>
                                    <td><?php echo $menu['pid']; ?></td>
                                    <td><?php echo $menu['name']; ?></td>
                                    <td>
                                        <?php if((isset($menu['type']) && ($menu['type'] !== '')?$menu['type']:'') == 'view'): ?>链接<?php endif; if((isset($menu['type']) && ($menu['type'] !== '')?$menu['type']:'') == 'click'): ?>模拟关键字<?php endif; ?> 
                                    </td>
                                    <td>
                                        <?php if((isset($menu['type']) && ($menu['type'] !== '')?$menu['type']:'') == 'view'): ?>
                                            <?php echo $menu['url']; endif; ?>  
                                    </td>
                                    <td>
                                        <?php if((isset($menu['type']) && ($menu['type'] !== '')?$menu['type']:'') == 'click'): ?>
                                            <?php echo $menu['key']; endif; ?>  
                                    </td>
                                    <td><?php echo $menu['rank']; ?></td>
                                    <td><?php echo $menu['remark']; ?></td>
                                    <td class="table-action">
                                        <a href="<?php echo url('/admin/wx/menu/add',array('id'=>$menu['id'])); ?>">修改</a>
                                        <a href="<?php echo url('/admin/wx/menu/del',array('id'=>$menu['id'])); ?>">删除</a>
                                    </td>
                                </tr>
                                <?php if(is_array($menu['sub']) || $menu['sub'] instanceof \think\Collection || $menu['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $menu['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu1): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td class="hidden-xs">
                                            <label><input name="checkbox" class="check" type="checkbox" value="<?php echo $menu1['id']; ?>"></label>
                                        </td>
                                        <td><?php echo $menu1['id']; ?></td>
                                        <td><?php echo $menu1['pid']; ?></td>
                                        <td>|─<?php echo $menu1['name']; ?></td>
                                        <td>
                                            <?php if((isset($menu1['type']) && ($menu1['type'] !== '')?$menu1['type']:'') == 'view'): ?>链接<?php endif; if((isset($menu1['type']) && ($menu1['type'] !== '')?$menu1['type']:'') == 'click'): ?>模拟关键字<?php endif; ?> 
                                        </td>
                                        <td>
                                            <?php if((isset($menu1['type']) && ($menu1['type'] !== '')?$menu1['type']:'') == 'view'): ?>
                                                <?php echo $menu1['url']; endif; ?>  
                                        </td>
                                        <td>
                                            <?php if((isset($menu1['type']) && ($menu1['type'] !== '')?$menu1['type']:'') == 'click'): ?>
                                                <?php echo $menu1['key']; endif; ?>  
                                        </td>
                                        <td><?php echo $menu1['rank']; ?></td>
                                        <td><?php echo $menu1['remark']; ?></td>
                                        <td class="table-action">
                                            <a href="<?php echo url('/admin/wx/menu/add',array('id'=>$menu1['id'])); ?>">修改</a>
                                            <a href="<?php echo url('/admin/wx/menu/del',array('id'=>$menu1['id'])); ?>">删除</a>
                                        </td>
                                    </tr>
                                <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="box-footer no-padding">
                    <div class="mailbox-controls">
                        <div class="btn-group">
                            <a class="btn btn-danger" href="<?php echo url('/admin/wechat/createWxMenu'); ?>">生成自定义菜单</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
</section>