<?php
namespace emp\EmpData\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
        $installer = $setup;
        $installer->startSetup();

        if(version_compare($context->getVersion(), '1.0.4', '<')) {
            $installer->getConnection()->addColumn(
                $installer->getTable('emp_info'),
                'Joining_Date',
                 Table::TYPE_DATETIME,
                null,
                ['nullable' => false],
                'Joining_Date'
            );
        }
        $installer->endSetup();
    }
}