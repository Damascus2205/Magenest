<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 01/02/2018
 * Time: 08:12
 */
namespace Test\Das\Controller\Index;

use Magento\Framework\App\Action\Action;

class Collection extends Action{
    public function execute()
    {
        // TODO: Implement execute() method.
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
        $this->getResponse()->setBody($output);
    }
}