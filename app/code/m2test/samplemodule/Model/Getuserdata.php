<?php
namespace m2test\samplemodule\Model;
use m2test\samplemodule\Api\Getuser;
use Magento\Catalog\Model\ProductFactory;
class Getuserdata implements Getuser
{
    protected $productFactory;
    public function __construct(
        ProductFactory $productFactory
    ) {
        $this->productFactory = $productFactory;
    }

    public function getuserdata()
    {
        
        try{
            $response = [
                    'storeid' => 'hi',
                    'name' => 'balaji'
            ];
        }catch(\Exception $e) {
            $response=['error' => $e->getMessage()];
        }
 
        return $response;
    }
  

    protected function resolveProductId($productSku)
    {
        $product = $this->productFactory->create();
        $productId = $product->getIdBySku($productSku);
        if (!$productId) {
            $invalid = ["code" => '301', "message" => "SKU " . $productSku . " Not Found On Magento"];
            return $invalid;
        }
        return $productId;
    }}