<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 01/02/2018
 * Time: 09:36
 */

namespace Pack\Thng\Block\Adminhtml;

class Subscription extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Pack_Thng';
        $this->_controller = 'adminhtml_subscription';
        parent::_construct();
    }
}