<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    /*首页*/
    public function index()
    {
        return $this->view->fetch("/index/index");

    }

    /*农场*/
    public function farm()
    {
        return $this->view->fetch('index/farm');
    }
    /*金库*/
    public function vault()
    {
        return $this->view->fetch('index/vault');
    }
    /*常见问题*/
    public function problem()
    {
        return $this->view->fetch('index/problem');
    }
    /*查看农场*/
    public function usdt()
    {
        return $this->view->fetch('index/usdt');
    }


}