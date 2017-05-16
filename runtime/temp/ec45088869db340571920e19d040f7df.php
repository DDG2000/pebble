<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"F:\pebble\public/../application/admin\view\addons_index.html";i:1494904121;}*/ ?>
    
<!-- Main content -->
<section class="content">
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">

            <h3 class="box-title">插件列表</h3>
        </div>
        <div class="box-body">
            <?php if(is_array($item) || $item instanceof \think\Collection || $item instanceof \think\Paginator): $i = 0; $__LIST__ = $item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
            <div class="row">
                <div class="col-xs-12">
                    <p class="lead"><?php echo $item['title']; ?></p>
                </div>
                <div class="col-xs-12 table-responsive">
                    <?php if(is_array($item['sub']) || $item['sub'] instanceof \think\Collection || $item['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addon): $mod = ($i % 2 );++$i;?>
                    <div class="col-md-3 col-sm-6 col-xs-12" style="min-width: 300px;">
                        <a href="<?php echo $addon['addons_admin_url']; ?>" target="_blank">
                            <div class="info-box" style="cursor:pointer;border: 1px solid #f7f7f7;box-shadow: none;height: 90px;">
                                <span style="float: left;width: 90px;text-align: center;line-height: 90px;">
                                    <img src="<?php echo $addon['addons_img_url']; ?>" style="height: 60px;">
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-number"><?php echo $addon['title']; ?></span>
                                    <small><?php echo $addon['description']; ?></small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</section>
