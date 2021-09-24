<?php

namespace emp\EmpData\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Empp extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('emp_info', 'id');
    }
}