<?php
namespace Pack\Thng\Model\Subscription;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{
    /**
     *Initaliza resource collection
     */
    public function _construct()
    {
        $this->_init('Pack/Thng/Model/Subscription','Pack/Thng/Model/ResourceModel/Subscription');
    }
}