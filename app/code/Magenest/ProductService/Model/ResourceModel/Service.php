<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 10/02/2018
 * Time: 14:23
 */
namespace Magenest\ProductService\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Service
 * @package Magenest\ProductService\Model\ResourceModel
 */
class Service extends AbstractDb
{
    /**
     *
     */
    public function _construct()
    {
        $this->_init('product_service', 'service_id');
    }
}
