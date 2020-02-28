<?php
namespace m2test\samplemodule\Model;
class User extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'm2test_samplemodule_user';

	protected $_cacheTag = 'm2test_samplemodule_user';

	protected $_eventPrefix = 'm2test_samplemodule_user';

	protected function _construct()
	{
		$this->_init(\m2test\samplemodule\Model\ResourceModel\User::class);
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];
		return $values;
	}
}

