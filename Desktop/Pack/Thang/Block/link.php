<?php

namespace Pack\Thang\Block;

use Magento\Framework\View\Element\Template;

class link extends Template{
    public function getLinkurl(){
        return $this->getUrl('thang');
    }
    public function getRedirecturl(){
        return $this->getUrl('thang/index/redirect');
    }
}
