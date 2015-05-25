<?php
namespace Home\Model;
use Think\Model;
class GsModel extends Model{
	protected $autoCheckFields =false; //如果没有Gs数据表的话 必须加上这句话
	public function getdata($where){	//通过条件获取数据库的所有数据
		$song = M("song");
    	$result = $song->where($where)->select();
    	return $result;
	}
	public function getone($where){		//获取单条数据
		$song = M("song");
		$result = $song->where($where)->find();
		return $result;
	}
	public function deleteone($id){		//删除单条数据
		$song = M("song");
		$result = $song->where('id='.$id)->delete();
		return $result;
	}
	public function addone($data){		//新建数据
		$song = M("song");
		$result = $song->data($data)->add();
		return $result;
	}
	public function findone($id){		//通过id获取数据
		$song = M("song");
		$result = $song->where('id='.$id)->select();
		return $result;
	}
	public function updateone($data,$id){	//通过id更新数据
		$song = M("song");
		$result = $song->table('song')->where('id='.$id)->save($data);
		return $result;
	}
	public function getuser(){				//获取用户数据
		$user = M("user");
		$result = $user->table('user')->select();
		return $result;
	}
	
}