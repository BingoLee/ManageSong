<?php
namespace Home\Controller;
use Think\Controller;
/*
 * -登陆页面控制器
 * */
class IndexController extends Controller {
    public function index(){
      $this->getvalue();					//调用函数判断是否验证成功
      $this->display('Index/index');
    }
	public function verify_c(){  			//验证码的设置
   		$config =    array(
				'fontSize'    =>    30,    // 验证码字体大小
				'length'      =>    4,     // 验证码位数
				'useCurve' => true, // 是否画混淆曲线
				'useNoise' => false, // 关闭验证码杂点
				'reset' => false, // 验证成功后是否重置
				//'useImgBg' => true,
		);
		$Verify = new \Think\Verify($config);
	    $Verify->entry();  
	} 
	function check_verify($code, $id = ''){		//判断验证码是否正确
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
    public function getvalue(){
    	if(isset($_POST['user']) || isset($_POST['password'])){
	    	$username = $_POST['user'];		//表单的用户名
	  		$password = $_POST['password'];	//表单的密码
	  		$user = M('user');				//调用数据库的User表
	  		$result = $user->find();		//查找
	  		$name = $result['username'];	//获得数据库的用户名
	  		$pass = $result['password'];	//获得数据库的密码
	  		$verify = $_POST['verify'];		//获得表单的验证码信息
	  		
	  		if($username == $name && md5($password) == $pass && $this->check_verify($verify)==true){
	  			//如果用户名，密码，验证码，都正确~登陆成功
	  			$this->show("登陆成功");
	  			$this->redirect("IndexPage/indexpage");
	  		}else{
	  			//任一个出错都会提示登陆失败
	  			$this->error("信息有误");
	  		}
    	}
    }
}