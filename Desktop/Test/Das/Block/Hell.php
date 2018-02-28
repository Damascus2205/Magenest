<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 31/01/2018
 * Time: 10:25
 */
namespace Test\Das\Block;

use Magento\Framework\View\Element\Template;

class Hell extends  Template
{
    public function getlandingurl(){
        return $this->getUrl('das');
    }
    public function getredirect(){
        return $this->getUrl('das/index/redirect');
    }
}