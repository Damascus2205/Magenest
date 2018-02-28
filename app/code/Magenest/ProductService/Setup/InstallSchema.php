<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 08/02/2018
 * Time: 11:00
 */
namespace Magenest\ProductService\Setup;

use Magento\Catalog\Model\ResourceModel\Config;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class InstallSchema
 * @package Magenest\ProductService\Setup
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * @var Config
     */
    protected $resourceConfig;

    /**
     * InstallSchema constructor.
     * @param Config $resourceConfig
     */
    public function __construct(
        Config $resourceConfig
    ) {
        $this->resourceConfig = $resourceConfig;
    }

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement install() method.
        $installer = $setup;
        $installer->startSetup();
        $table = $installer->getConnection()
            ->newTable($installer->getTable('product_service'))
            ->addColumn(
                'id',
                Table::TYPE_INTEGER,
                255,
                [
                    'identity'=>true,
                    'primary'=> true,
                    'nullable'=>false,
                    'unsigned'=>true
                ],
                'id_product_service'
            )->addColumn(
                'product_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'nullable'=>false
                ],
                'product_id'
            )->addColumn(
                'vendor_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'nullable'=>false
                ],
                'vendor_id'
            )->addColumn(
                'customer_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'nullable'=>false
                ],
                'customer_id'
            )->addColumn(
                'store_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'nullable'=>false
                ],
                'store_id'
            )->addColumn(
                'service_type',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable'=>false
                ],
                'service_type'
            )->addColumn(
                'msg',
                Table::TYPE_TEXT,
                255,
                [
                    'nullable'=>false
                ],
                'message'
            )->addColumn(
                'order_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'nullable'=>false
                ],
                'order_id'
            )->addColumn(
                'item_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'nullable'=>false
                ],
                'item_id'
            );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();
    }
}
