<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 05/02/2018
 * Time: 09:45
 */
namespace Test\Das\Controller\Adminhtml\Form;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Edit extends Action
{
    protected $resultPageFactory;
    public function __construct(Action\Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $productCollection = $this->_objectManager
            ->create('Test\Das\Model\ResourceModel\Subscription\Collection')
//            ->addAttributeToSelect(['name','price','image',])
////            ->addAttributeTOFilter('name',['kiem','kim cuong'])
//            ->addAttributeToFilter('name',['like'=>'%i%'])
            ->setPageSize(10,1);
//        $output = $productCollection->getSelect()->__toString();
        $output = '';
//        $productCollection->setDataToAll('price',20);
//        $productCollection->save();
        foreach($productCollection as $product){
            $output .= \Zend_Debug::dump($product->debug(),null,false);
        }
        $this->getResponse()->setBody($output.$id);
    }
}