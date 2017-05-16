<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"F:\pebble\public/../application/admin\view\index_index.html";i:1494239574;}*/ ?>

<section class="content">
    <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo (isset($todayUser) && ($todayUser !== '')?$todayUser:0); ?></h3>

                    <p>今日新用户</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-stalker"></i>
                </div>
                <a href="<?php echo url('/admin/user/index/index',array('day'=>'today')); ?>" class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo (isset($weekUser) && ($weekUser !== '')?$weekUser: 0); ?></h3>

                    <p>本周新用户</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-stalker"></i>
                </div>
                <a href="<?php echo url('/admin/user/index/index',array('day'=>'week')); ?>" class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?php echo (isset($monthUser) && ($monthUser !== '')?$monthUser: 0); ?></h3>

                    <p>本月新用户</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-stalker"></i>
                </div>
                <a href="<?php echo url('/admin/user/index/index',array('day'=>'month')); ?>" class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?php echo (isset($totalUser) && ($totalUser !== '')?$totalUser: 0); ?></h3>

                    <p>总用户</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-stalker"></i>
                </div>
                <a href="<?php echo url('/admin/user/index/index',array('day'=>'')); ?>" class="small-box-footer">更多详情 <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- LINE CHART -->
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">新用户走势图</h3>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="newUserLineChart" style="height:250px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">系统信息</h3>
                </div>
                <div class="box-body">
                    <blockquote style="font-size: 13.5px;padding-left: 10px;">
                        THINKPHP版本：<?php echo THINK_VERSION; ?><br/>
                        服务器IP：<?php echo \think\Request::instance()->server('SERVER_ADDR'); ?><br/>
                        服务器系统：<?php echo PHP_OS ?><br/>
                        PHP版本：<?php echo PHP_VERSION ?><br/>
                        当前时间：<?php echo (date("Y-m-d H:i:s",time())); ?><br/>
                        官网网址：<a href="http://www.wemallshop.com" target="_black">http://www.wemallshop.com</a><br/>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">通知列表</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?php if(is_array($newsList['data']) || $newsList['data'] instanceof \think\Collection || $newsList['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $newsList['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?>
                        <div class="attachment-block clearfix" style="background-color: #fff">
                            <img class="attachment-img" src="<?php echo $url; ?>public/uploads/<?php echo $news['file']['savepath']; ?><?php echo $news['file']['savename']; ?>" alt="Attachment Image" style="width: 105px;height: 60px">
                            <div class="attachment-pushed">
                                <h3 class="attachment-heading" style="line-height: 60px">
                                    <a href="<?php echo $url; ?>cms/article/<?php echo $news['pinyin']; ?>" target="_black" style="font-weight: 500;"><?php echo $news['title']; ?></a>
                                </h3>
                                <!-- <div class="attachment-text"> -->
                                    <!-- <?php echo $news['sub']; ?><?php echo $news['created_at']; ?> -->
                                    <!-- <a href="<?php echo $url; ?>cms/article/<?php echo $news['pinyin']; ?>" target="_black">点击查看</a> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>
    </div>











</section>

<script type="text/javascript">
    $(function () {
        //Get context with jQuery - using jQuery's .get() method.
        var ctx = $("#newUserLineChart").get(0).getContext("2d");
        //This will get the first returned node in the jQuery collection.

        var data = {
            labels : <?php echo (isset($date) && ($date !== '')?$date: '1'); ?>,
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    data : <?php echo (isset($newUserLine) && ($newUserLine !== '')?$newUserLine: '1'); ?>
                }
            ]
        }

        new Chart(ctx).Line(data);
    });
</script>
