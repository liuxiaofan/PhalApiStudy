<?php
/**
 * 商品处理
 */

class Api_Goods extends PhalApi_Api{
    public function getRules()
    {
        return array(
            'snapshot'=>array(
                'goodsId'=>array('name'=>'id','type'=>'int','require'=>true,'desc'=>'商品id')
            )
        );
    }

    /**
     *商品快照
     * @desc 获得商品的快照信息
     * @return int goods_id 商品id
     * @return string goods_name 商品名称
     * @return  int goods_price 商品价格
     * @return string goods_image 商品图片
     */
    public function snapshot()
    {
        $domain = new Domain_Goods();
        $info = $domain->snapshot($this->goodsId);
        return $info;
    }
}