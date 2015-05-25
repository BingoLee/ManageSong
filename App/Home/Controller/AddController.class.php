<?php
namespace Home\Controller;
use Think\Controller;
/*
 * 新增歌曲控制器
 * */
class AddController extends Controller {
    public function add(){
    	$gs = D('Gs'); 							//实例化自己创建的模板
    	if(isset($_GET['url']) && isset($_GET['name']) && isset($_GET['key'])){//判断表单是否为空
    		$data['url'] = $_GET['url'];
    		$data['sname'] = $_GET['name'];
    		$data['key'] = $_GET['key'];
    											//获得表单内容将其放入数组
    		$result = $gs->addone($data); 		//调用模板方法将数组信息传入然后新增歌曲完成
    		$this->success("新增成功",'Add/add');
    	}
    	
        $this->show();
    }
}