<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 24/02/2018
 * Time: 09:55
 */
namespace Magenest\Movie\Setup;

use Magento\Catalog\Model\ResourceModel\Config;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

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
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $setup->startSetup();

        $table = $installer->getConnection()
            ->newTable($installer->getTable('magenest_director'))
            ->addColumn(
                'director_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'primary' =>true,
                    'identity' =>true,
                    'nullable'=>false,
                ],
                'director id'
            )->addColumn(
                'name',
                Table::TYPE_TEXT,
                255,
                [],
                'name'
            );
        $installer->getConnection()->createTable($table);


        $table = $installer->getConnection()
            ->newTable($installer->getTable('magenest_movie'))
            ->addColumn(
                'movie_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'primary' =>true,
                    'identity' =>true,
                    'nullable'=>false,
                ],
                'movie id'
            )->addColumn(
                'name',
                Table::TYPE_TEXT,
                255,
                [],
                'name'
            )->addColumn(
                'description',
                Table::TYPE_TEXT,
                255,
                [],
                'description'
            )->addColumn(
                'rating',
                Table::TYPE_INTEGER,
                255,
                [],
                'rating'
            )->addColumn(
                'director_id',
                Table::TYPE_INTEGER,
                255,
                [],
                'director id'
            )->addForeignKey(
                $installer->getFkName(
                    'magenest_movie',
                    'director_id',
                    'magenest_director',
                    'director_id'
                ),
                'director_id',
                $installer->getTable('magenest_director'),
                'director_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            );
        $installer->getConnection()->createTable($table);

        $table = $installer->getConnection()
            ->newTable($installer->getTable('magenest_actor'))
            ->addColumn(
                'actor_id',
                Table::TYPE_INTEGER,
                255,
                [
                    'primary' =>true,
                    'identity' =>true,
                    'nullable'=>false,
                ],
                'actor id'
            )->addColumn(
                'name',
                Table::TYPE_TEXT,
                255,
                [],
                'name'
            );
        $installer->getConnection()->createTable($table);

        $table = $installer->getConnection()
            ->newTable($installer->getTable('magenest_movie_actor'))
            ->addColumn(
                'movie_id',
                Table::TYPE_INTEGER,
                255,
                [],
                'movie id'
            )->addColumn(
                'actor_id',
                Table::TYPE_INTEGER,
                255,
                [],
                'actor id'
            )->addForeignKey(
                $installer->getFkName(
                    'magenest_movie_actor',
                    'movie_id',
                    'magenest_movie',
                    'movie_id'
                ),
                'movie_id',
                $installer->getTable('magenest_movie'),
                'movie_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            )->addForeignKey(
                $installer->getFkName(
                    'magenest_movie_actor',
                    'actor_id',
                    'magenest_actor',
                    'actor_id'
                ),
                'actor_id',
                $installer->getTable('magenest_actor'),
                'actor_id',
                \Magento\Framework\DB\Ddl\Table::ACTION_CASCADE
            );
        $installer->getConnection()->createTable($table);
        $installer->endSetup();

    }
}