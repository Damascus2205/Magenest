<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 01/02/2018
 * Time: 07:37
 */
namespace Test\Das\Model\ResourceModel\Subscription;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{
    public function _construct()
    {
        $this->_init('Test\Das\Model\Subscription','Test\Das\Model\ResourceModel\Subscription');
    }
}