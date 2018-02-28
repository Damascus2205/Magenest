<?php
/**
// * Created by PhpStorm.
// * User: thang
// * Date: 29/01/2018
// * Time: 06:29
// */
//namespace Pack\CustomerAttribute\Setup;
//
//use Magento\Framework\Setup\InstallDataInterface;
//use Magento\Framework\Setup\ModuleContextInterface;
//use Magento\Framework\Setup\ModuleDataSetupInterface;
//
//class InstallData implements InstallDataInterface
//{
//    private $customerSetupFactory;
//
//    /**
//     * InstallData constructor.
//     * @param \Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory
//     */
//    public function __construct(
//        \Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory)
//    {
//        $this->customerSetupFactory = $customerSetupFactory;
//    }
//    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
//    {
//        $customerSetup = $this->customerSetupFactory->create(['setup'=>$setup]);
//        $setup->startSetup();
//        $customerSetup->addAtribute('customer','loyaltynumber',[
//            'label'=>'Loyaltynumber',
//            'type'=>'static',
//            'frontend_input'=>'text',
//            'required'=> false,
//            'visible'=>true,
//            'poisition'=>105,
//        ]);
//        $loyaltyAttribute = $customerSetup->getEavConfig()->getAttribute('customer','loyaltynumber');
//        $loyaltyAttribute->setData('used_in_forms',['adminhtml_customer']);
//        $loyaltyAttribute->save();
//        $setup->endSetup();
//    }
//}

namespace Pack\Customer\Setup;

use    Magento\Framework\Setup\InstallDataInterface;
use    Magento\Framework\Setup\ModuleContextInterface;
use    Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $customerSetupFactory;
    public function __construct(\Magento\Customer\Setup\CustomerSetupFactory $customerSetupFactory)
    {
        $this->customerSetupFactory = $customerSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /**    @var    CustomerSetup $customerSetup */
        $customerSetup = $this->customerSetupFactory->create(['setup' => $setup]);
        $setup->startSetup();
        $customerSetup->addAttribute('customer', 'lo121', [
            'label' => 'Lo121',
            'type' => 'static',
            'frontend_input' => 'text',
            'required' => false,
            'visible' => true,
            'position' => 105,
        ]);
        $loyaltyAttribute = $customerSetup->getEavConfig()->getAttribute('customer', 'lo121');
        $loyaltyAttribute->setData('used_in_forms', ['adminhtml_customer']);
        $loyaltyAttribute->save();
        $setup->endSetup();
				}
}