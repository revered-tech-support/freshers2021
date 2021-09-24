<?php

namespace emp\EmpData\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{

    protected $date;
    public function __construct(
        \Magento\Framework\Stdlib\DateTime\DateTime $date
    ) {
        $this->date = $date;
    }
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.4', '<')) {
            $data = [
                        'empname' => 'Fayz ',
                        'address' => 'Pune',
                        'mobile' => 9541358 ,
                        'Joining_Date' =>  $this->date->date()
            ];
            $table=$setup->getTable('emp_info');
            $setup->getConnection()
                ->update($table, ['Joining_Date' => '2021-09-24'], 'empname LIKE "%Nayum%"');
              $setup->getConnection()
                  ->update($table, ['Joining_Date' => '2021-09-25'], 'empname LIKE "%Nasir%"');
              $setup->getConnection()->insert($setup->getTable('emp_info'), $data);
        }
        $setup->endSetup();
    }
}