<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 05/02/2018
 * Time: 10:14
 */
namespace Test\Das\Block\Adminhtml\Sub;

use    Magento\Backend\Block\Widget\Grid as WidgetGrid;
use Test\Das\Block\Adminhtml\Sub\Renderer\Input;

class Gridnew extends \Magento\Backend\Block\Widget\Grid\Extended
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
//                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Input'

            ]
        );
        $this->addColumn(
            'firstname',
            [
                'header' => __('Firstname'),
                'index' => 'firstname',
                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Input'
            ]
        );
        $this->addColumn(
            'lastname',
            [
                'header' => __('Lastname'),
                'index' => 'lastname',
                'type'=>'input',
//                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Input'
            ]
        );
        $this->addColumn(
            'email',
            [
                'header' => __('Email	address'),
                'index' => 'email',
                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Input'
            ]
        );
        $this->addColumn(
            'status',
            [
                'header' => __('Status'),
                'index' => 'status',
                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Select'
            ]
        );
        $this->addColumn(
            'submit',
            [
                'header' => __('Submit'),
                'index' => 'submit',
//                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Select'
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
//        $this->addColumn(
//            'action',
//            [
//                'header'=>__('Action'),
//                'index'=> 'action',
//                'renderer'=>'Test\Das\Block\Adminhtml\Sub\Renderer\Edit',
//            ]);
        return $this;
    }
}