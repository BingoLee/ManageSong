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
		  <li role="presentation"   class="active"><a href="<?php echo U("IndexPage/indexpage");?>">首页</a></li>
		  <li role="presentation"><a href="<?php echo U("ManageSong/ManageSong");?>">歌曲管理</a></li>
		  <li role="presentation"><a href="<?php echo U("ManageUser/ManageUser");?>">会员管理</a></li>
		  <li role="presentation"><a href="<?php echo U("Index/index");?>">退出登录</a></li>
		</ul>
    </div>
	
    	<div class="panel panel-default">
			  <div class="panel-heading">首页</div>
			  <div class="panel-body">
			    <div class="jumbotron">
				  <h1>热烈欢迎Boss登录后台</h1>
				  <p>Boom~~~~sha ka la ka</p>
				</div>
			  </div>
		</div>

 





</body>
</html>