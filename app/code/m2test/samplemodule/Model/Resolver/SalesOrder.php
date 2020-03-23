<?php

declare(strict_types=1);

namespace m2test\samplemodule\Model\resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

/**
 * Order sales field resolver, used for GraphQL request processing
 */
class SalesOrder implements ResolverInterface
{
    public function __construct(
    ) {
    }

    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $productCollection = $objectManager->create('Magento\Reports\Model\ResourceModel\Report\Collection\Factory');
        $collection = $productCollection->create('Magento\Sales\Model\ResourceModel\Report\Bestsellers\Collection');

        $collection->setPeriod('month');
        //$collection->setPeriod('year');
        //$collection->setPeriod('day');

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/createCustomerLog.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        foreach ($collection as $item) {
            $product["product"]=$item; 
            $result[]=$product["product"];   
        }
        return ["BestSellingProduct" =>$result];
    }
}
