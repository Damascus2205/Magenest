<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 05/02/2018
 * Time: 11:01
 */
namespace Test\Das\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class Subnew extends Container{
    protected function _construct()
    {
        $this->_blockGroup = 'Test_Das';
        $this->_controller = 'adminhtml_sub';

        //TODO: Change the autogenerated stub

//        $this->addButton('Submit');
//        $this->buttonList->remove('add');
        parent::_construct();
        $this->removeButton('add');
    }
}