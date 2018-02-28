<?php
namespace Pack\Thang\Block;

use	Magento\Framework\View\Element\Template;
use \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
//use \Magento\Calalog\Model\ResourceModel\Product\CollectionFactory;

class product extends Template{
    private $_productCollectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $productCollectionFactory ,
//        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        array $data = [])
    {
        parent::__construct($context, $data);
        $this->_productCollectionFactory = $productCollectionFactory;
    }
    public function getProduct(){
        $collection = $this->_productCollectionFactory->create();
        $collection
            ->addAttributeToSelect('*')
            ->setOrder('create at')
            ->setPagesize(5);
        return $collection;

    }

}
