<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 30/01/2018
 * Time: 07:43
 */

namespace Pack\Thng\Controller\Adminhtml\Subscription;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Backend\App\Action;

/**
 * Class Index
 * @package Pack\Thng\Controller\Adminhtml\Subscription
 */
class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $a = 1;
//        echo 'a';
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Pack_Thng::subscription');
        $resultPage->addBreadcrumb(__('Thng'), __('Thng'));
        $resultPage->addBreadcrumb(__('Manage Subscriptions'),__('Manage Subscriptions'));
        $resultPage->getConfig()->getTitle()->prepend(__('Subscriptions'));
        return $resultPage;
    }
    protected function _isAllowed()
    {
        return $this->_authorization ->isAllowed('Pack_Thng::subscription');
    }
}