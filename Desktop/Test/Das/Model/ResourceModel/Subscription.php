<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 31/01/2018
 * Time: 23:31
 */
namespace Test\Das\Model\ResourceModel;
class Subscription extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
    public function _construct()
    {
        $this->_init('test_das_subscription','subscription_id');
    }
}