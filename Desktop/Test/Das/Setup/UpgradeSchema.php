<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 31/01/2018
 * Time: 23:39
 */
namespace Test\Das\Setup;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements  UpgradeSchemaInterface{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement upgrade() method.
        if(version_compare($context->getVersion(),'2.0.1')<0){
            $install = $setup;
            $install->startSetup();
//            $conection = $install->getConnection();
            $table = $install->getConnection()->newTable($install->getTable(
                'test_das_subscription'))->addColumn(
                    'subscription_id',
                    \Magento\Framework\Db\Ddl\Table::TYPE_INTEGER,
                    null,[
                        'identity'=>true,
                        'unsigned'=>true,
                        'nullable'=>false,
                        'primary'=>true
                ],
                    'Subscription Id'
            )->addColumn(
                'creata_at',
                \Magento\FrameWork\Db\Ddl\Table::TYPE_TIMESTAMP,
                null,[
                    'nullable'=>true,
                    'default'=>\Magento\Framework\Db\Ddl\Table::TIMESTAMP_INIT
                ],
                'create at'
            )->addColumn(
                'update_at',
                \Magento\Framework\Db\Ddl\Table::TYPE_TIMESTAMP,
                null,
                [],
                'update_at'
            )->addColumn(
                'firstname',
                \Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
                64,
                ['nullable'=>false],
                'first_name'
            )->addColumn(
                'lastname',
                \Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
                64,
                ['nullable'=>false],
                'lastname'
            )->addColumn(
                'email',
                \Magento\Framework\Db\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable'=>false],
                'email'
            )->addIndex(
                $install->getIdxName('test_das_subsciption',['email']),['email'])
                ->setComment('cron schedule');
            $install->getConnection()->createTable($table);
            $install->endSetup();
        }
    }
}
