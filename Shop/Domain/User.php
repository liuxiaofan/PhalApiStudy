<?php
/**
 * Created by PhpStorm.
 * User: Steven
 * Date: 2017/10/4
 * Time: 21:20
 */
class Domain_User
{
    public function getUserBaseInfo($userId)
    {
        $info = array();
        $userId = intval($userId);
        if ($userId < 1)
        {
            return $info;
        }
        $model = new Model_User();
        $info = $model->get($userId);
        return $info;
    }
}