<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 29/01/2018
 * Time: 10:32
 */

namespace Pack\Shipme\Model\Carrier;

use Magento\Shipping\Model\Rate\Result;
use \Magento\Shipping\Model\Carrier\AbstractCarrier;
use \Magento\Shipping\Model\Carrier\CarrierInterface;

class Shipme extends AbstractCarrier implements CarrierInterface
{
    protected $_code = 'shipme';
    /**
     * @var \Magento\Shipping\Model\Rate\ResultFactory
     */
    protected $_rateResultFactory;
    /**
     * @var \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory
     */
    protected $_rateMethodFactory;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Quote\Model\Quote\Address\RateResult\ErrorFactory $rateErrorFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Shipping\Model\Rate\ResultFactory $rateResultFactory,
        \Magento\Quote\Model\Quote\Address\RateResult\MethodFactory $rateMethodFactory,
        array $data = []
    )
    {
        $this->_rateResultFactory = $rateResultFactory;
        $this->_rateMethodFactory = $rateMethodFactory;
        parent::__construct($scopeConfig, $rateErrorFactory, $logger, $data);
    }

    public function collectRates(\Magento\Quote\Model\Quote\Address\RateRequest $request)
    {
        if (!$this->getConfigFlag('active')) {
            return false;
        }
        $result = $this->_rateResultFactory->create();
        //Check	if	express	method	is	enabled
        if ($this->getConfigData('express_enabled')) {
            $method = $this->_rateMethodFactory->create();
            $method->setCarrier($this->_code);
            $method->setCarrierTitle($this->getConfigData('name'));
            $method->setMethod('express');
            $method->setMethodTitle($this->getConfigData('express_title'));
            $method->setPrice($this->getConfigData('express_price'));
            $method->setCost($this->getConfigData('express_price'));
            $result->append($method);
        }
        //Check	if	business	method	is	enabled
        if ($this->getConfigData('business_enabled')) {
            $method = $this->_rateMethodFactory->create();
            $method->setCarrier($this->_code);
            $method->setCarrierTitle($this->getConfigData('name'));
            $method->setMethod('business');
            $method->setMethodTitle($this->getConfigData('business_title'));
            $method->setPrice($this->getConfigData('business_price'));
            $method->setCost($this->getConfigData('business_price'));
            $result->append($method);
        }
        return $result;
    }

    public function getAllowedMethods()
    {
        return ['shipme' => $this->getConfigData('name')];
    }
    public function isTrackingAvailable()
    {
        return true;
    }
}