<?php
namespace app\index\model;
use think\Model;
use think\Db;
use think\Session;

class Text extends Model
{
    public function login()
    {
        
    }

    public function liebiao()
    {
        $res = Db::name('images')->select();
        return $res;
    }
}