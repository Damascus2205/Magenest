<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 29/01/2018
 * Time: 08:15
 */

namespace Pack\Thng\Model\Observer;

use \Psr\Log\LoggerInterface;
use \Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class RegisterVisitObserver implements ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute(Observer $observer)
    {
        $this->logger->debug('Registered');
    }
}