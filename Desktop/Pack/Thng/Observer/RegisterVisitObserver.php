<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 30/01/2018
 * Time: 22:33
 */

namespace Pack\Thng\Observer;

use Magento\Framework\Event\ObserverInterface;

class RegisterVisitObserver implements ObserverInterface
{
    /**    @var    \Psr\Log\LoggerInterface $logger */
    protected $logger;
    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $product = $observer->getProduct();
        $category = $observer->getCategory();
        $this->logger->debug(print_r($product->debug(), true));
        $this->logger->debug(print_r($category->debug(), true));
    }
}