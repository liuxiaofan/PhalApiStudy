<?php
/**
 * 欢迎使用此接口
 */

class Api_Welcome extends PhalApi_Api
{
    public function getRules()
    {
        return array(
            'say'=>array(
                'username'=>array('name'=>'username','require'=>true,'desc'=>'用户名','min'=>3)
            )
        );
    }

    /**
     *  打招呼
     * @desc 打招呼函数
     * @return  string data 数据
     * @return string title 标题
     */
    public function say()
    {
        return array(
            'title'=>'说话',
            'data'=>"hello world".$this->username
        );
    }
}