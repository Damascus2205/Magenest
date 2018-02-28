<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 24/01/2018
 * Time: 10:15
 */
namespace Pack\Thng\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Subscription extends AbstractDb {
    public function _construct()
    {
        $this->_init('pack_thng_subscription','subscription_id');
    }
}