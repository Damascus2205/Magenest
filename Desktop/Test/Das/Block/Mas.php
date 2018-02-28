<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 31/01/2018
 * Time: 11:14
 */
namespace  Test\Das\Block;

use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\View\Element\Template;

class Mas extends Template
{
    private $_productCollectionFactory;
    public function __construct(
        Template\Context $context,
        CollectionFactory $productCollectionProduct,
        array $data = [])
    {
        $this->_productCollectionFactory = $productCollectionProduct;
        parent::__construct($context, $data);
    }
    public function getPr(){
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*')->setOrder('create at')->setPageSize(5);
        return $collection;
    }
}