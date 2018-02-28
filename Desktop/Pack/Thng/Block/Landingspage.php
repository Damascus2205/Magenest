<?php

namespace Pack\Thng\Block;

use Magento\Framework\View\Element\Template;

class Landingspage extends Template
{
    public function getLandingsUrl()
    {
        return $this->getUrl('thng');
    }

    public function getRedirectUrl()
    {
        return $this->getUrl('thng/index/redirect');
    }
}