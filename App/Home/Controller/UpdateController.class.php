<?php
namespace Home\Controller;
use Think\Controller;
/*
 * -歌曲更新信息控制器
 * */
class UpdateController extends Controller {
    public function Update(){
    	$gs = D('Gs');
        $data = $gs->getdata();
        $this->data = $data;
        /*显示信息给前台页面*/
        if(isset($_GET['id'])){
        	$id = $_GET['id'];				//获取id
        	$result = $gs->findone($id);	//通过id查找
        	$this->back = $result;			/*通过id获取id = ?的歌曲信息*/
        }
        if(isset($_GET['updateurl']) && isset($_GET['updatename']) && isset($_GET['updatekey'])){
        	/*判断是否存在歌曲的各种信息*/
        	$id = $_GET['updateid'];						//更新后的id
        	$updatedata['url'] = $_GET['updateurl'];		//更新后的url
        	$updatedata['sname'] = $_GET['updatename'];		//更新后的歌曲名
        	$updatedata['key'] = $_GET['updatekey'];		//更新后的正确答案
        	$gs->updateone($updatedata,$id);				//传入歌曲信息和id给方法
        	$this->success('修改成功','Update/update');		//更新成功!
        }
    	$this->display();
        
    }
}