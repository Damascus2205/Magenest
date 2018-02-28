<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 05/02/2018
 * Time: 11:13
 */
namespace Test\Das\Block\Adminhtml\Sub\Renderer;

/**
 * Class Edit
 * @package Test\Das\Block\Adminhtml\Sub\Renderer
 */
class Select extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
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
//        $data=$row->getData();
//        $value = $data['subscription_id'];
        return ' <select type="text" name="status"/>
                    <option>Pending</option>
                    <option>Approved</option>
                    <option>Decline</option>';
//            .$value.'">'.__('Edit').'</a> ]';
    }

}
