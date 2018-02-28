<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 03/02/2018
 * Time: 07:45
 */
namespace Test\Das\Block\Adminhtml;

use Magento\Framework\View\Element\Template;

class Form extends Template
{
    /**
     * @var \Test\Das\Model\SubscriptionFactory
     */
    protected $subscription;

    /**
     * Form constructor.
     * @param Template\Context $context
     * @param array $data
     * @param \Test\Das\Model\SubscriptionFactory $subscriptionFactory
     */
    public function __construct(
        Template\Context $context,
        array $data = [],
        \Test\Das\Model\SubscriptionFactory $subscriptionFactory
    ) {
        parent::__construct($context, $data);
        $this->subscription = $subscriptionFactory;
    }
    public function getInfor()
    {
        return $this->getUrl('das/subscription/form');
    }
    public function getDt($a)
    {
        $id = $this->_request->getParam('id');
        if($id != ''){
        $data = $this->subscription->create()->load($id);
        $result = $data->getData($a);}
        else $result = '';
        return $result;
//    }
    }
}