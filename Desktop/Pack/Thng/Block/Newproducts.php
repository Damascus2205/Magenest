<?php

namespace Pack\Thng\Block;

use    Magento\Framework\View\Element\Template;
use    \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class    Newproducts extends Template
{
    private $_productCollectionFactory;

    /**
     * Newproducts constructor.
     * @param Template\Context $context
     * @param CollectionFactory $productCollectionFactory
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $productCollectionFactory,
        array $data = [])
    {
        parent::__construct($context, $data);
        $this->_productCollectionFactory = $productCollectionFactory;
    }

    /**
     * @return mixed
     */
    public function getProducts()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection
            ->addAttributeToSelect('*')
            ->setOrder('created_at')
            ->setPageSize(5);
        return $collection;
    }
}