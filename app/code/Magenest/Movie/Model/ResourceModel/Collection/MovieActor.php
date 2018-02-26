<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 24/02/2018
 * Time: 11:20
 */
namespace Magenest\Movie\Model\ResourceModel\Collection;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class MovieActor extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Magenest\Movie\Model\MovieActor', 'Magenest\Movie\Model\ResourceModel\MovieActor');
    }
}
