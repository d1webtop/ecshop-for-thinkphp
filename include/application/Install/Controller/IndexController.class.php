<?php
namespace Install\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('ecshop for thinkphp.','utf-8');
    }
}