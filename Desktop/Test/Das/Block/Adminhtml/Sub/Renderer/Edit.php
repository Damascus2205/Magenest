<?php
/**
 * Copyright © 2017 Magenest, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Test\Das\Block\Adminhtml\Sub\Renderer;

/**
 * Class Edit
 * @package Test\Das\Block\Adminhtml\Sub\Renderer
 */
class Edit extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
{
    /**
     * @var \Magenest\CancelOrder\Model\CancelOrderFactory
     */
    protected $_resultFactory;

    /**
     * Edit constructor.
     * @param \Magento\Backend\Block\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Render the grid cell value
     *
     * @param \Magento\Framework\DataObject $row
     * @return string
     */
    public function render(\Magento\Framework\DataObject $row)
    {
//        return '1111';
        $data=$row->getData();
        $value = $data['subscription_id'];
        return $value.' [ <a href="http://localhost/m218/admin/das/subscription/new?id='.$value.'">'.__('Edit').'</a> ]';
    }

}
