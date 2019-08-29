<?php

namespace Leanswift\CustomForm\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

/**
 * Class UpgradeSchema
 * @package Leanswift\CustomForm\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Zend_Db_Exception
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        if (version_compare($context->getVersion(), '1.1.6', '<')) {
            $table = $setup->getConnection()->newTable(
                $setup->getTable('new_form')
            )->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'ID'
            )
                ->addColumn(
                  'cus_id',
                  \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                  null,
                  ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                  'Customer ID'
              )
              ->addColumn(
                  'fname',
                  \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                  255,
                  ['nullable' => false, 'default' => ''],
                    'First Name'
              )
              ->addColumn(
                  'lname',
                  \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                  255,
                  ['nullable' => false, 'default' => ''],
                    'Last Name'
              )
              ->addColumn(
                  'mob',
                  \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                  255,
                  ['nullable' => false, 'default' => ''],
                    'Mobile Number'
              )
              ->addColumn(
                  'mail',
                  \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                  255,
                  ['nullable' => false, 'default' => ''],
                    'Email'
              )
              ->addColumn(
                  'add',
                  \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                  255,
                  ['nullable' => false, 'default' => ''],
                    'Address'
              );

            $setup->getConnection()->createTable($table);
        }

        $setup->endSetup();
    }
}
