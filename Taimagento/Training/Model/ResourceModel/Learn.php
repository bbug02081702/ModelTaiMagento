<?php
namespace Taimagento\Training\Model\ResourceModel;

class Learn extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        // Table name + primary key column
        $this->_init('students', 'entity_id');
    }

}