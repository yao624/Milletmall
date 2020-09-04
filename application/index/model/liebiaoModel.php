<?php
namespace app\index\model;

use think\Model;
use think\Db;
use think\Session;

class liebiaoModel extends Model
{
    public function liebiao()
    {
        $res = Db::name('images')->select();
        return $res;
    }
}