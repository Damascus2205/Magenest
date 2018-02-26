<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 10/02/2018
 * Time: 14:23
 */
namespace Magenest\ProductService\Model;

use Magento\Framework\Model;
use Magento\Framework\Model\AbstractModel;
use \Magento\Framework\Registry;
use \Magento\Framework\Data\Collection\AbstractDb;

/**
 * Class Service
 * @package Magenest\ProductService\Model
 */
class Service extends AbstractModel
{

    /**
     * Service constructor.
     * @param Model\Context $context
     * @param Registry $registry
     * @param Model\ResourceModel\AbstractResource|null $resource
     * @param AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        Model\Context $context,
        Registry $registry,
        Model\ResourceModel\AbstractResource $resource = null,
        AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }


    public function _construct()
    {
        $this->_init('Magenest\ProductService\Model\ResourceModel\Service');
    }
}
