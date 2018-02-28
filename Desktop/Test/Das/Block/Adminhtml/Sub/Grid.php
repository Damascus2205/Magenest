<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 03/02/2018
 * Time: 00:01
 */

namespace Test\Das\Block\Adminhtml\Sub;

use    Magento\Backend\Block\Widget\Grid as WidgetGrid;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Test\Das\Model\ResourceModel\Subscription\Collection
     */
    protected $_subscriptionCollection;

    /**
     * Grid constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Test\Das\Model\ResourceModel\Subscription\Collection $subscriptionCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Test\Das\Model\ResourceModel\Subscription\Collection $subscriptionCollection,
        array $data = []
    )
    {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No	Subscriptions	Found'));
    }

    /**
     * @return $this
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);
        return parent::_prepareCollection();
    }

    public function decorateStatus($value)
    {
        $class = '';
        switch ($value) {
            case    'pending':
                $class = 'grid-severity-minor';
                break;
            case    'approved':
                $class = 'grid-severity-notice';
                break;
            case    'declined':
            default:
                $class = 'grid-severity-critical';
                break;
        }
        return '<span	class="' . $class . '"><span>' . $value . '</span></span>';
    }

    /**
     * @return $this
     * @throws \Exception
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'subscription_id',
            [
                'header' => __('ID'),
                'index' => 'subscription_id',
            ]
        );
        $this->addColumn(
            'firstname',
            [
                'header' => __('Firstname'),
                'index' => 'firstname',
            ]
        );
        $this->addColumn(
            'lastname',
            [
                'header' => __('Lastname'), 'index' => 'lastname',
            ]
        );
        $this->addColumn(
            'email',
            [
                'header' => __('Email	address'),
                'index' => 'email',
            ]
        );
        $this->addColumn(
            'status',
            [
                'header' => __('Status'),
                'index' => 'status',
            ]
        );
//        $this->addColumn(
//            'status',
//            [
//                'header'	=>	__('Status'),
//                'index'	=>	'status',
//                'frame_callback'	=>	[$this,	'decorateStatus']
//            ]
//        );
        $this->addColumn(
            'edit',
            [
                'header'=>__('Edit'),
                'index'=> 'edit',
                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Edit',
            ]);
        $this->addColumn(
            'delete',
            [
                'header'=>__('Delete'),
                'index'=> 'delete',
                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Delete',
            ]);
        return $this;
    }
}