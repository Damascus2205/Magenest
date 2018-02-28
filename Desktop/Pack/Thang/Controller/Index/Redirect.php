<?php
namespace Pack\Thang\Controller\Index;

class Redirect extends \Magento\Framework\App\Action\Action{
    public function execute()
    {
        // TODO: Implement execute() method.
        return $this->_redirect('thang');
    }
}
