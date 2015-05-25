<?php
namespace Home\Controller;
use Think\Controller;
/*
 * -删除歌曲控制器
 * */
class DeleteController extends Controller {
    public function Delete(){
    	$gs = D('Gs');
    	$data = $gs->getdata();
    	$this->data = $data; 				//查找所有数据并显示在页面上
		if(isset($_GET['id'])){ 			//如果有传入ID.
			$deletenumber = $_GET['id'];	//获取ID
			$result = $gs->deleteone($deletenumber); //传入ID并根据ID删除歌曲
			if($result == 1){ 				//如果删除成功
				$this->success('删除成功');
			}else{							//如果删除失败
				$this->error('删除失败');
			}
		}
    	$this->display();
		
    }
}