<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 03/02/2018
 * Time: 00:01
 */
namespace Test\Das\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class Sub1 extends Container{
    protected function _construct()
    {
        $this->_blockGroup = 'Test_Das';
        $this->_controller = 'adminhtml_sub';
        parent::_construct(); // TODO: Change the autogenerated stub
    }
}