<?php

namespace nayum\Helloworld1\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $dataUserRows = [
            [
                'name' => 'Nasirahmed Sayyed',
                'address' => 'Maharashtra India',
                'mobile' => '8485005212'
            ],
            [
                'name' => 'Nayum Shaikh',
                'address' => 'Maharashtra India',
                'mobile' => '7485496521'
            ],
            [
                'name' => 'Fayz Hasan',
                'address' => 'London UK',
                'mobile' => '5688545652'
            ]

        ];

        foreach($dataUserRows as $data) {
            $setup->getConnection()->insert($setup->getTable('user_infoo'), $data);
        }
    }
}
