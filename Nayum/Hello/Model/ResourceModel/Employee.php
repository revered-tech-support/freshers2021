<?php
namespace Nayum\Hello\Model\ResourceModel;

class Employee extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('emp_infoo', 'id');
    }

}

