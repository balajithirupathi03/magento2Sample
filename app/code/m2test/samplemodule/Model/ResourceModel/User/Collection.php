<?php
namespace m2test\samplemodule\Model\ResourceModel\User;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	// protected $_idFieldName = 'post_id';
	// protected $_eventPrefix = 'm2test_samplemodule_User_collection';
	// protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
        $this->_init(\m2test\samplemodule\Model\User::class, \m2test\samplemodule\Model\ResourceModel\User::class);
	}
}