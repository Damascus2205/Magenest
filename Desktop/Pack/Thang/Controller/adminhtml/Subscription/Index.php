<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 31/01/2018
 * Time: 07:55
 */

namespace Pack\Thang\Controller\Adminhtml\Subscription;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Pack_Thang::subscription');
        $resultPage->addBreadcrumb(__('HelloWorld'), __('HelloWorld'));
        $resultPage->addBreadcrumb(__('Manage	Subscriptions'), __('Manage	Subscriptions'));
        $resultPage->getConfig()->getTitle() ->prepend(__('Subscriptions'));
        return $resultPage;
    }
    protected function _isAllowed()
    {
        return $this->_authorization ->isAllowed('Pack_Thang::subscription');
    }
}