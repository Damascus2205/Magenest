<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 28/01/2018
 * Time: 19:43
 */
namespace Pack\Thng\Controller\Adminhtml\Component;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

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
        // TODO: Implement execute() method.
        $resultPage	=	$this->resultPageFactory->create();
        $resultPage->setActiveMenu('Pack_Thng::component');
        $resultPage->addBreadcrumb(__('Thng'),	__('Thng'));
        $resultPage->addBreadcrumb(__('Components'),	__('Components'));
        $resultPage->getConfig()->getTitle()->prepend(__('Components'));
        return	$resultPage;
    }
    protected function _isAllowed()
    {
        return	$this->_authorization->isAllowed('Pack_Thng::thng');
    }
}
