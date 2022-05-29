<?php
namespace Taimagento\Training\Model\ResourceModel\Learn;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    
    protected function _construct()
    {
        // Model + Resource Model
        $this->_init(\Taimagento\Training\Model\Learn::class, \Taimagento\Training\Model\ResourceModel\Learn::class);
    }

}