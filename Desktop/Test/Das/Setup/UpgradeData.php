<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 01/02/2018
 * Time: 08:30
 */
namespace Test\Das\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface{
    protected $categorySetupFactory;
    public function __construct(
        \Magento\Catalog\Setup\CategorySetupFactory $categorySetupFactory
    )
    {
        $this->categorySetupFactory = $categorySetupFactory;
    }
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement upgrade() method.
        if(version_compare($context->getVersion(),'2.0.2')<0){
            $categorySetup = $this->categorySetupFactory->create(['setup'=> $setup]);
            $entityTypeId = $categorySetup->getEntityTypeId(\Magento\Catalog\Model\Product::ENTITY);
            $categorySetup->addAttribute($entityTypeId,'dasmascus_label',
                [
                    'type'=>'varchar',
                    'label'=>'da_label',//under
                    'input'=>'text',
                    'required'=>false,
                    'visiable_on_front'=>true,
                    'apply_to'=>'simple,configurable, virtual,bundle, downloadable',
                    'unique'=>false,
                    'group'=>'Das'//front
                ]);
        }
    }
}