<?php

namespace emp\EmpData\Model;

use Magento\Framework\Model\AbstractModel;
use emp\EmpData\Model\ResourceModel\Empp as ResourceModel;

class Empp extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(emp\EmpData\Model\ResourceModel\Empp::class);
    }
}