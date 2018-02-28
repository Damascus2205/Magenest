<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 25/01/2018
 * Time: 09:20
 */
namespace Pack\Thng\Model\ResourceModel\Subscription;
/**
 *	Subscription	Collection
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     *	Initialize	resource	collection
     *
     *	@return	void
     */
    public function _construct()	{
        $this->_init('Pack\Thng\Model\Subscription', 'Pack\Thng\Model\ResourceModel\Subscription');
    }
}