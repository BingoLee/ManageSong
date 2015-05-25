<?php
namespace Home\Controller;
use Think\Controller;
/**
 * -歌曲信息列表
 * */
class SearchController extends Controller {
    public function search(){
        $data = D('Gs')->getdata();		//返回数据库的数据
    	$this->data = $data;			//赋值以便模板可以调用
    	$this->display();
    }
}