<?php
namespace Nayum\Hello\Block;

use Nayum\Hello\Model\ResourceModel\Employee\Collection;
use Nayum\Hello\Model\ResourceModel\Employee\CollectionFactory;
use Magento\Framework\View\Element\Template;

class Emp extends Template
{
    private $collectionFactory;
    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data =[]
    )
    {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getEmployees()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
