<?php

namespace m2test\samplemodule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use m2test\samplemodule\Model\User;
use m2test\samplemodule\Model\ResourceModel\User as UserResource;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_userFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\m2test\samplemodule\Model\UserFactory $userFactory
	) {
		$this->_userFactory = $userFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$user = $this->_userFactory->create();
//---------create
		// $user->addData(['name'=>'balaji']);
		// $user->save();

//---------Update
		// $post_id=5;
		// $data=array('name'=>'balaji03');
		// $user->load($post_id,'post_id')->addData($data);
		// $user->setId($post_id,'post_id')->save();

//---------Delete
		// $post_id = 'balaji';
		// foreach ($user->getCollection()->getData() as $U) {
		// 	$user->load($post_id, 'name');
		// 	$user->delete();
		// }

//----------select Using Condition
		//print_r($user->getCollection()->addFieldToFilter('name','Paul Dupond')->getData());	

//----------Select Particular Coloumn
		print_r($user->getCollection()->addFieldToFilter('name','Paul Dupond')->getColumnValues('name'));	

		print_r($user->getCollection()->getData());
	}
}
