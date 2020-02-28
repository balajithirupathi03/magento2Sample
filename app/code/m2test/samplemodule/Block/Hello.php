<?php

namespace m2test\samplemodule\Block;

use Magento\Framework\View\Element\Template;
use m2test\samplemodule\Model\ResourceModel\User\Collection;

class Hello extends Template{
    private $Collection;
    public function __construct(      
        Template\Context $context,
        Collection $collection,
        array $data = [])
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllUser() {
        echo 'hi';exit;
        return $this->collection;
    }

    public function getAddUserPostUrl() {
        echo 'hii';exit;
        return $this->getUrl('helloworld/user/add');
    }
}
