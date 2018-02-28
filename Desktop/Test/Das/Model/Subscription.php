<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 01/02/2018
 * Time: 07:31
 */
namespace Test\Das\Model;
//interact
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model;


class Subscription extends AbstractModel{
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_DECLINED = 'declined';

    /**
     * Subscription constructor.
     * @param Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param Model\ResourceModel\AbstractResource|null $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        Model\Context $context,
        \Magento\Framework\Registry $registry,
        Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = [])
    {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }
    public function _construct()
    {
        $this->_init('Test\Das\Model\ResourceModel\Subscription');
    }

}