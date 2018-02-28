<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 25/01/2018
 * Time: 08:48
 */

namespace Pack\Thang\Model\ResourceModel\Subscription;
/**
 *    Subscription Collection
 */
use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     *    Initialize    resource    collection
     *
     * @return    void
     */
    public function _construct()
    {
        $this->_init('Pack\Thang\Model\Subscription',
            'Pack\Thang\Model\ResourceModel\Subscription');
    }
}