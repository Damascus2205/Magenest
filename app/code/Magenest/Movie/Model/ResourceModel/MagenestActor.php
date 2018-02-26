<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 10/02/2018
 * Time: 14:23
 */
namespace Magenest\Movie\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MagenestActor extends AbstractDb
{

    public function _construct()
    {
        $this->_init('magenest_actor', 'actor_id');
    }
}
