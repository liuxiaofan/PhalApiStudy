<?php
/**
 * PhpUnderControl_ApiGoods_Test
 *
 * 针对 ../Api/Goods.php Api_Goods 类的PHPUnit单元测试
 *
 * @author: dogstar 20171004
 */

require_once dirname(__FILE__) . '/../test_env.php';

if (!class_exists('Api_Goods')) {
    require dirname(__FILE__) . '/../Api/Goods.php';
}

class PhpUnderControl_ApiGoods_Test extends PHPUnit_Framework_TestCase
{
    public $apiGoods;

    protected function setUp()
    {
        parent::setUp();

        $this->apiGoods = new Api_Goods();
    }

    protected function tearDown()
    {
        // 输出本次单元测试所执行的SQL语句
        // var_dump(DI()->tracer->getSqls());

        // 输出本次单元测试所涉及的追踪埋点
        // var_dump(DI()->tracer->getSqls());
    }




    /**
     * @group testSnapshot
     */ 
    public function testSnapshot()
    {
        //step 1. 构建请求URL
        $url = 'service=Goods.Snapshot';
        $params = array(
            'id' => 1,
        );

        // Step 2. 执行请求
        $rs = PhalApi_Helper_TestRunner::go($url, $params);

        //step 3. 验证
        $this->assertNotEmpty($rs);
        $this->assertArrayHasKey('goods_id', $rs);
        $this->assertArrayHasKey('goods_name', $rs);
        $this->assertArrayHasKey('goods_price', $rs);
        $this->assertArrayHasKey('goods_image', $rs);

    }

}
