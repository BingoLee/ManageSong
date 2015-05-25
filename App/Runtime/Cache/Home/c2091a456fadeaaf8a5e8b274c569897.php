<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>你猜我猜</title>

<script type="text/javascript" src="/Work/Public/Index/js/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="/Work/Public/Index/js/index.js" ></script>
<script type="text/javascript" src="/Work/Public/Index/js/bootstrap.js" ></script>

<link href="/Work/Public/Index/css/index.css" rel="stylesheet" type="text/css" />
<link href="/Work/Public/Index/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/Work/Public/Index/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="header">
	    <div class="page-header">
			  	<h1>猜歌管理系统 <small>滨滨和泓泓</small></h1>
		</div>
    </div>
    
	<div id="message">
        <ul class="nav nav-pills nav nav-tabs nav-justified">
		  <li role="presentation"><a href="<?php echo U("IndexPage/indexpage");?>">首页</a></li>
		  <li role="presentation"  class="active"><a href="<?php echo U("ManageSong/ManageSong");?>">歌曲管理</a></li>
		  <li role="presentation"><a href="<?php echo U("ManageUser/ManageUser");?>">会员管理</a></li>
		  <li role="presentation"><a href="<?php echo U("Index/index");?>">退出登录</a></li>
		</ul>
    </div>
	
    <div id="left">
    	<div class="panel panel-default">
			  <div class="panel-heading">管理员</div>
			  <div class="panel-body">
			    	<div class="goods-message">
				        <span class="add-goods">+</span>　歌曲管理
				        	<ul class="hide-goods">
				            <li><a href="<?php echo U("Search/Search");?>">查看歌曲</a></li>
				            <li><a href="<?php echo U("Update/update");?>">修改歌曲</a></li>
				            <li><a href="<?php echo U("Add/add");?>">新增歌曲</a></li>
				            <li><a href="<?php echo U("Delete/delete");?>">删除歌曲</a></li>
				              <li><a href="<?php echo U("Download/download");?>">测试传入数据</a></li>
				            </ul>
        			</div>
			  </div>
		</div>
    </div><!-- end of left -->

    <div id="right">
    	<div class="panel panel-default">
			  <div class="panel-heading">新增歌曲</div>
			  <div class="add-form">
			  	<h3><strong>请填写歌曲信息</strong></h3>
			  	<form action="<?php echo U("Add/add");?>" method="get">
				  <div class="form-group">
				    <label for="exampleInputEmail1">歌曲地址(url)</label>
				    <input type="text" class="form-control" name="url" id="exampleInputEmail1" placeholder="http://xxxxx.com">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">歌曲名称</label>
				    <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="最炫民族风">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">正确答案</label>
				    <input type="text" class="form-control" name="key" id="exampleInputPassword2" placeholder="最炫民族风">
				  </div>
				  <button type="submit" class="btn btn-default">提交数据</button>
				</form>
			  </div>	 
		</div>

    </div><!-- end of right -->

</body>
</html>