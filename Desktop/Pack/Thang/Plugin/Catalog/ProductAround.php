<?php
namespace Pack\Thang\Plugin\Catalog;

use Magento\Catalog\Model\Product;

class ProductAround{
    public function aroundGetName($intecepterInput){
        return "Name of product";
    }
}
