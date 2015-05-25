<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆</title>

<script type="text/javascript" src="/Work/Public/Index/js/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="/Work/Public/Index/js/index.js" ></script>
<script type="text/javascript" src="/Work/Public/Index/js/bootstrap.js" ></script>

<link href="/Work/Public/Index/css/index.css" rel="stylesheet" type="text/css" />
<link href="/Work/Public/Index/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/Work/Public/Index/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
</head>

<body>
		<div class="login">
		<h1>Login</h1>
				<form action="<?php echo U("Index/index");?>" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">用户名</label>
				    <input type="text" class="form-control" name="user" id="exampleInputEmail1" placeholder="username">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">密码</label>
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="password">
				  </div>
				  <div id="captcha-container">
				    <input type="text" class="form-control" width="50%" name="verify" id="exampleInputEmail1" placeholder="验证码"/>
				    <img width="200" class="left15" height="50" alt="验证码" src="<?php echo U('Home/Index/verify_c',array());?>" title="点击刷新"> 
				  </div>
				  
				  <button type="submit" class="btn btn-default">登陆</button>
				</form>
		</div>               
</p> 
</body>
</html>