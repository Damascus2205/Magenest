<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 01/02/2018
 * Time: 09:38
 */

namespace Pack\Thng\Block\Adminhtml\Subscription;

use Magento\Backend\Block\Widget\Grid as WidgetGrid;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Pack\Thng\Model\ResourceModel\Subscription\Collection
     */
    protected $_subscriptionCollection;

    /**
     * Grid constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \Pack\Thng\Model\ResourceModel\Subscription\Collection $subscriptionCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Pack\Thng\Model\ResourceModel\Subscription\Collection $subscriptionCollection,
        array $data = []
    )
    {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No	Subscriptions	Found'));
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
        return '<span	class="' . $class . '"><span>' . $value . '</span>
</span>';
    }
    public function decorate($value)
    {
        $class = '';
        switch ($value) {
            case    'thang':
                $class = 'grid-severity-minor';
                break;
            case    'thng':
                $class = 'grid-severity-notice';
                break;
            case    'dec':
            default:
                $class = 'grid-severity-critical';
                break;
        }
        return '<span	class="' . $class . '"><span>' . $value . '</span>
</span>';
    }

    /**
     *  Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);
        return parent::_prepareCollection();
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
                'header'=>__('ID'),
                'index'=>'subscription_id',
            ]
        );
        $this->addColumn(
            'firstname',
            [
                'header'=>__('Firstname'),
                'index'=>'firstname',
                'frame_callback'=>[$this,'decorate']
            ]
        );
        $this->addColumn(
            'lastname',
            [
                'header'=>__('Lastname'),												'index'	=>	'lastname',
            ]
        );
        $this->addColumn(
            'email',
            [
                'header'=>__('Email	address'),
                'index'	=>'email',
            ]
        );
        $this->addColumn(
            'status',
            [
                'header'=>__('Status'),
                'index'=>'status',
            ]
        );
//        $this->addColumn(
//        'status',
//        [
//            'header' => __('Status'),
//            'index' => 'status',
//            'frame_callback' => [$this, 'decorateStatus']
//        ]
//    );
        $this->addColumn(
            'status',
            [
                'header'=>__('Status'),
                'index'=>'status',
                'frame_callback'=>[$this,'decorateStatus']
            ]
        );
        return	$this;
    }
}