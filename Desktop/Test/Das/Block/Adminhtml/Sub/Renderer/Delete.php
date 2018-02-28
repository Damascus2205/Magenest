<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 07/02/2018
 * Time: 10:30
 */
namespace Test\Das\Block\Adminhtml\Sub\Renderer;

/**
 * Class Edit
 * @package Test\Das\Block\Adminhtml\Sub\Renderer
 */
class Delete extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer
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
        return $value.'<form action="http://localhost/m218/admin/das/subscription/form" method="post">
                        <input type="hidden" name="id1" value="'.$value.'"/>
                        <input type="hidden" name="action" value="delete"/>
                        <button type="submit">Delete</button>
                        </form>';
    }

}
