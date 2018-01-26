<?php
namespace Admin\Controller;
use Think\Controller;
/**
 *后台公共模板
 */
class TemplateController extends Controller{
    //index
    public function index(){

        $this->display();
    }
}