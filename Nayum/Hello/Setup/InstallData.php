<?php

namespace Nayum\Hello\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $dataUserRows = [
            [
                'empname' => 'Nayum',
                'address' => 'Pune',
                'mobile' => '79787576'
            ],
            [
                'empname' => 'Nasir',
                'address' => 'Pune',
                'mobile' => '9850035'
            ]

        ];

        foreach($dataUserRows as $data) {
            $setup->getConnection()->insert($setup->getTable('emp_infoo'), $data);
        }
    }
}
