<?php
namespace application\index\model;
use think\Model;

class User extends Model
{
	
	protected $pk = 'id';

    public function getUser(){

	$info=$this->where('id',1)->find();
    

    return $info;



}
}



?>