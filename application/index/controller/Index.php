<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\liebiaoModel;

class Index extends Controller
{
    public function index()
    {
        // 显示主页面小米商城
        return $this->fetch('./index');
    }

    public function shopping()
    {
        // 购物车
        return $this->fetch('./gouwuche');
    }

    public function details()
    {
        // 商品详情
        return $this->fetch('./xiangqing');
    }

    public function list()
    {
        // 商品列表
        $use = new liebiaoModel();
        $res = $use->liebiao();
        $this->assign('res',$res);
        return $this->fetch("./liebiao");
    }
        //商品列表功能
    
}
