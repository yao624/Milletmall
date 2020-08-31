<?php
namespace app\index\controller;
use think\Controller;
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
        return $this->fetch('./liebiao');
    }
}
