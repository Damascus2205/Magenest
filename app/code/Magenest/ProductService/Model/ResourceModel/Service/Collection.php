<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 10/02/2018
 * Time: 14:23
 */
namespace Magenest\ProductService\Model\ResourceModel\Service;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Magenest\ProductService\Model\ResourceModel\Collection
 */
class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Magenest\ProductService\Model\Service', 'Magenest\ProductService\Model\ResourceModel\Service');
    }
}
