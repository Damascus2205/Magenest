<?php
namespace Pack\Thng\Model;

use \Magento\Framework\Model\AbstractModel;

Class Subscription1 extends AbstractModel{
    const STATUS_PENDING = 'pending';
    const STATUS_APPROVED = 'approved';
    const STATUS_DECLINE = 'decline';
    public function __construct(
        Context $context,
        \Magento\Framework\Registry $registry,
        ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = [])
    {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }
    public function _construct()
    {
        $this->_init('Pack\Thng\Model\ResourceModel\Subscription');
    }
}