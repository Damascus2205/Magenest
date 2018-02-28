<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 31/01/2018
 * Time: 09:57
 */
namespace Test\Das\Controller\Index;

use Magento\Framework\App\Action\Action;

class Redirect extends Action{
    public function execute()
    {
        $this->_redirect('das');
        // TODO: Implement execute() method.
    }
}