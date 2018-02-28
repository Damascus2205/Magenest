<?php

namespace Pack\Thang\Controller\adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Backend\App\Action;

class Index extends Action
{
    protected $resultPageFactory;
    protected	function	_isAllowed()
    {
        return	$this->_authorization->isAllowed('Pack_Thang::index');
    }
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}