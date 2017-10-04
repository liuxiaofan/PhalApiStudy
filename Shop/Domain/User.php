<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2017/10/4
 * Time: 21:20
 */
class Domain_User
{
    public function getUserinfo($userId)
    {
        $model = new Model_User();
        $userinfo = $model->get($userId);
        return $userinfo;
    }
}