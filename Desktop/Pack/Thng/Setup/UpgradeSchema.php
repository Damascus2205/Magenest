<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 24/01/2018
 * Time: 10:22
 */
namespace Pack\Thng\Setup;

use \Magento\Framework\Setup\UpgradeSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement upgrade() method.
        if( version_compare($context->getVersion(),'2.0.1')<0){
            $install = $setup;
            $install->startSetup();
            $connect = $install->getConnection();
            /**
             Install database
             */
            $table = $install->getConnection()->newTable(
                $install->getTable('pack_thng_subscription')
            )->addColumn(
                'subscription_id',
                Table::TYPE_INTEGER,
                null,
                [
                    'identity' => true,
                    'unsigned' => true,
                    'nullable' => false,
                    'primary' => true
                ],
                'Subscription id'
                )->addColumn(
                    'create_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    [
                        'nullable' => false,
                        'default' => Table::TIMESTAMP_INIT
                    ],
                    'Create at'
                )->addColumn(
                    'update_at',
                    Table::TYPE_TIMESTAMP,
                    null,
                    [],
                    'Update at'
                )->addColumn(
                    'firstname',
                    Table::TYPE_TEXT,
                    64,
                    [
                        'nullable' => false
                    ],
                    'First name'
                )->addColumn(
                    'lastname',
                    Table::TYPE_TEXT,
                    64,
                    ['nullable'=>false],
                    'Last name'
                )->addColumn(
                    'email',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'=>false],
                    'Email address'
                )->addColumn(
                    'status',
                    Table::TYPE_TEXT,
                    255,
                    [
                        'nullable'=>false,
                        'default'=>'pending'
                    ],
                    'Status'
                )->addColumn(
                    'message',
                    Table::TYPE_TEXT,
                    255,
                    [
                        'nullable'=>false,
                        'unsigned'=>false
                    ],
                    'scriptions note'
                )->addIndex(
                    $install->getIdxName('pack_thng_subscription',['email']),['email'])
                ->setComment('Cron schedule');
            $install->getConnection()->createTable($table);
            $install->endSetup();
        }
    }
}