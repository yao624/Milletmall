<?php
namespace app\index\controller;
use think\Controller;

class Login extends Controller
{
    public function sigin()
    {
        // 显示登录页面
        return $this->fetch('./login');
    }

    public function siginup()
    {
        // 显示注册页面
        return $this->fetch('./register');
    }
}