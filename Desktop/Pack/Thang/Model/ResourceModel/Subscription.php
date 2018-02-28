<?php

namespace Pack\Thang\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Subscription extends AbstractDb
{
    public function _construct()
    {
        $this->_init('pack_thang_subscription', 'subscription_id');
    }
}