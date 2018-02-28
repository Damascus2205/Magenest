<?php

namespace Pack\Thng\Controller\Index;

use \Magento\Framework\App\Action\Action;

class    Redirect extends Action
{
    public function execute()
    {
        $this->_redirect('thng');
    }
}