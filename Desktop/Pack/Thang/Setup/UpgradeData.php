<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 25/01/2018
 * Time: 11:24
 */

namespace Pack\Thang\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use \Magento\Catalog\Setup\CategorySetupFactory;
use \Magento\Catalog\Model\Product;

class UpgradeData implements UpgradeDataInterface
{
    protected $categorySetupFactory;
    public function __construct(CategorySetupFactory $categorySetupFactory)
    {
        $this->categorySetupFactory = $categorySetupFactory;
    }
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '2.0.2') < 0) {
            $categorySetup = $this->categorySetupFactory->create(['setup' => $setup]);
            $entityTypeId = $categorySetup->getEntityTypeId(Product::ENTITY);
            $categorySetup->addAttribute($entityTypeId, 'helloworld_label',
                array(
                    'type' => 'varchar',
                    'label' => 'Thang label',
                    'input' => 'text',
                    'required' => false,
                    'visible_on_front' => true,
                    'apply_to' => 'simple,configurable,virtual,bundle,downloadable',
                    'unique' => false,
                    'group' => 'HelloWorld'
                ));
        }
    }
}