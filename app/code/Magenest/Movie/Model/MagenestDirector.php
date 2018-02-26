<?php
namespace Magenest\Movie\Model;

use Magento\Framework\Model;
use Magento\Framework\Model\AbstractModel;
use \Magento\Framework\Registry;
use \Magento\Framework\Data\Collection\AbstractDb;


class MagenestDirector extends AbstractModel
{
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
        $this->_init('Magenest\Movie\Model\ResourceModel\MagenestDirector');
    }
}
