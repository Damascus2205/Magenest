<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 31/01/2018
 * Time: 09:51
 */
namespace Test\Das\Controller\Index;

use \Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index extends Action{
    protected $resultPageFactory;
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public  function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        // TODO: Implement execute() method.
        return $resultPage;
    }
}