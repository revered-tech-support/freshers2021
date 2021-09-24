<?php
namespace Nayum\Hello\Model\ResourceModel\Employee;

use Nayum\Hello\Model\ResourceModel\Employee as EmployeeResource;
use Nayum\Hello\Model\Employee;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Employee::class, EmployeeResource::class);
    }
}
