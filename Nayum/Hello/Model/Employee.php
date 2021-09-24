<?php
namespace Nayum\Hello\Model;

class Employee extends \Magento\Framework\Model\AbstractModel
{

    protected function _construct()
    {
        $this->_init(\Nayum\Hello\Model\ResourceModel\Employee::class);
    }

}
