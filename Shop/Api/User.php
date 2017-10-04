<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2017/10/4
 * Time: 21:13
 */
class Api_User extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'userinfo'=>array(
                'userId'=>array('name'=>'id','desc'=>'用户ID','type'=>'int','min'=>1),
            )
        );
    }
    /**
     * 用户信息
     * @desc 获得指定id用户的基本信息
     * @return int id 用户id
     * @return string name 用户昵称
     * @return int age 用户年龄
     * @return string note 笔记
     * @return string create_date 注册时间
     */
    public function userinfo()
    {

    }
}