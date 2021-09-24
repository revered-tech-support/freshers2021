<?php
namespace emp\EmpData\Model\ResourceModel\Empp;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use emp\EmpData\Model\Empp as Model;
use emp\EmpData\Model\ResourceModel\Empp as ResourceModel;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}