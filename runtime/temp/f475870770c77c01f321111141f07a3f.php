<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\mytest\wemall\public/../application/admin\view\help_index.html";i:1494239574;}*/ ?>
<style type="text/css">
	#bodybox {
	    margin: 0 auto 10% auto;
	    width: 100%;
	    max-width: 640px;
	}
	.content-div {
	    background: #5cb3ff;
	    color: #fff;
	    padding: 5px 10px;
	    border-top-right-radius: 20px;
	    border-bottom-right-radius: 20px;
	    line-height: 30px;
	}
	#bodybox img {
	    width: 95%;
	    margin-top: 5%;
	    margin-left: 2.5%;
	}
	p {
	    margin-left: 10px;
	    text-indent: 2em;
	}
	h2 {
	    text-align: center;
	}
	.text-center {
	    text-align: center;
	}
</style>
<!-- Main content -->
<section class="content">
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">

            <h3 class="box-title">使用帮助</h3>
        </div>
        <div class="box-body" id="bodybox">
        	<span class="content-div">第一步：对接公众号URL和Token</span>
        	<p>打开后台系统中系统设置项下面的微信设置，找到微信token项以及它下面的那串url地址（注：token类似于密码，token可以自己修改）。</p>
		    <img src="__PUBLIC__/static/dist/img/help/image1.png" />
		    <p class="text-center">图1 后台token对应位置</p>
		    <p>打开微信官方公众后台（https://mp.weixin.qq.com）,登陆自己的公众号，进入到开发者模式模块，启用开发者模式，填写URL和Token两项（就是图1中的相关值）</p>
		    <img src="__PUBLIC__/static/dist/img/help/image2.png" />
		    <p class="text-center">图2 配置微信后台</p>

		    <span class="content-div">第二步：对接appid和AppSecret及微信支付参数</span>
		    <p>在微信公众后台可看到该公众号的appid和AppSecret，把这两项复制到后台系统中的对应位置。 微信支付参数设置同上述，将相关信息复制进对应位置。
		    </p>
		    <img src="__PUBLIC__/static/dist/img/help/image3.png" />
		    <p class="text-center">图3 系统后台对应位置</p>
		    <img src="__PUBLIC__/static/dist/img/help/image4.png" />
		    <p class="text-center">图4 微信appid和AppSecret</p>

		    <span class="content-div">第三步：设置自定义菜单</span>
		    <p>建议设置项：</p>
		    <p>商城首页：http://<?php echo $_SERVER['HTTP_HOST'];?>__ROOT__/app/index/index</p>

		    <span class="content-div">第四步：设置首次关注回复图片或文字</span>
		    <img src="__PUBLIC__/static/dist/img/help/image5.png" />
		    <p class="text-center">图5 系统后台对应微信设置</p>
		    <p>若需设置首次关注的图片，开启对应功能并上传对应图片。如果没开启，系统会去查询是否设置首次关注对应的描述，如果仍未设置，则不会有系统首次关注的回复。</p>

		    <span class="content-div">第五步：可设置qq客服</span>
		    <img src="__PUBLIC__/static/dist/img/help/image6.png" />
		    <p class="text-center">图5 系统后台对应设置</p>
        </div>
    </div>
</section>
