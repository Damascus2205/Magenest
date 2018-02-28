<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 05/02/2018
 * Time: 07:46
 */
namespace Test\Das\Controller\Adminhtml\Form;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
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