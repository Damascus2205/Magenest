<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 25/01/2018
 * Time: 10:05
 */
//namespace Pack\Thang\Controller\Index;
//
//Class Collection extends \Magento\Framework\App\Action\Action{
//    public function execute()
//    {
//        // TODO: Implement execute() method.
//        $productCollection=$this->_objectManager
//            ->create('\Magento\Catalog\Model\ResourceModel\Product\Collection')->setPageSize(10,1);
//        $output='';
//        foreach ($productCollection as $product){
//            $output .= \Zend_Debug::dump($product->debug(),null,false);
//            $output .= \Zend_Debug::dump($product->dedug(),null,false);
//        }
//        $this->getResponse()->setBody($output);
//    }
//}
namespace Pack\Thang\Controller\Index;

class Collection extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $productCollection = $this->_objectManager
            ->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addAttributeToSelect(['name', 'price', 'image',]);
//            ->addAttributeToFilter('name',	array('like' => '%Kim%'));
//            ->addAttributeToFilter('name','Kim cuong')
//            ->setPageSize(10, 1);
        $output = '';
//        $productCollection->setDataToAll('price',	20);
//        $productCollection->save();
        foreach ($productCollection as $product) {
            $output .= \Zend_Debug::dump($product->debug(),null,false);
        }
//        $output	=	$productCollection->getSelect()->__toString();

        $this->getResponse()->setBody($output);
    }
}