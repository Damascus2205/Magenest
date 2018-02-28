<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 01/02/2018
 * Time: 09:02
 */
namespace Test\Das\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action{
    protected $resultPageFactory;
    public function __construct(Action\Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        // TODO: Implement execute() method.
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}