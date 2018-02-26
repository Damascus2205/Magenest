<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 10/02/2018
 * Time: 13:46
 */
namespace Magenest\ProductService\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Magenest\ProductService\Controller\Index
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param \Magento\Sales\Model\OrderFactory $orderFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        $data = $this->getRequest()->getPost();
        try {
            $modelOrder = $this->_objectManager->create('Magento\Sales\Model\Order')->load($data['order_id']);
            $customerId = $modelOrder->getCustomerId();
            $data = [
            'product_id' => $data['product_id'],
            'customer_id' => $customerId,
            'store_id' => $data['stored_id'],
            'service_type' => $data['service_type'],
            'order_id' => $data['order_id'],
            'item_id' => $data['item_id'],
            ];
            $modelService = $this->_objectManager->create('Magenest\ProductService\Model\Service');
            $modelService->addData($data)->save();
        } catch (\mysqli_sql_exception $e) {
        }
        $this->_redirect('sales/order/history');
    }
}
