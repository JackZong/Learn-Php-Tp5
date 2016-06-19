<?php
namespace application\index\controller;
use think\Controller;

class Index 
{
    public function index()
    {
			return $this->fetch('index');

       }
   public function accesslist(){

            $user = model('User');
            $name = $user->getUser(); 
            var_dump($name);
            return $this->fetch(); 
       }
}
