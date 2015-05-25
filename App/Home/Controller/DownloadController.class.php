<?php
namespace Home\Controller;
use Think\Controller;
/*
 * 传递信息给App的页面
 * */
class DownloadController extends Controller {
    public function Download(){
        $this->getvalue();
									        //只调用
									        //不显示页面
    }
   public function getvalue(){
       	$id = isset($_GET['id'])? $_GET['id'] : '1';	//判断App是否传入地址,默认值id=1
    	$song = M("song");								//调用模板,实例化表->Song
    	$result = $song->where("id=".$id)->find();		//通过id从数据库查找表的详细内容
    	$array = array(
    			'id'=>urlencode($result['id']),
    			'url'=>urlencode($result['url']),
    			'sname' => urlencode($result['sname'])
    	);
    	//直接encode->$result无法识别中文以及其他符号,通过传入数组再进行encode可解决此问题!!!
		$array = json_encode($array);
		echo urldecode($array);
    }
}
