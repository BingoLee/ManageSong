<?php
namespace Home\Controller;
use Think\Controller;
/*
 * -会员信息管理控制器
 * */
class UserController extends Controller {
    public function LookUser(){
    	$data = D('Gs')->getuser();
    	$this->data = $data;
    	$this->display('User/LookUser');
    }
    public function DeleteUser(){
    	$gs = D('Gs');
    	$data = $gs->getuser();
    	$this->data = $data;
    	/*注释内的方法可删除用户*/
		/*if(isset($_GET['id'])){
			$deletenumber = $_GET['id'];
			$result = $gs->deleteuser($deletenumber);
			if($result == 1){ //如果删除成功
				$this->success('删除成功');
			}else{//如果删除失败
				$this->error('删除失败');
			}
		}*/
    	$this->display();
    }
}