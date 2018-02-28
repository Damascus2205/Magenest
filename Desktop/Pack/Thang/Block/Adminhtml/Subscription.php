<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 31/01/2018
 * Time: 08:01
 */
namespace	Pack\Thang\Block\Adminhtml;
class Subscription extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Pack_HelloWorld';
        $this->_controller = 'adminhtml_subscription';
        parent::_construct();
    }
}