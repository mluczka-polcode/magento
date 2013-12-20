<?php

class Mage_Catalog_Block_Product_Bestseller extends Mage_Catalog_Block_Product_Abstract
{
    public function __construct()
    {
        parent::__construct();

        $storeId = Mage::app()->getStore()->getId();

        $products = Mage::getResourceModel('reports/product_collection')
            ->addAttributeToSelect(array('name', 'price', 'special_price', 'small_image', 'short_description', 'description'))
            ->setStoreId($storeId)
            ->addStoreFilter($storeId)
            ->addAttributeToFilter('is_bestseller', '1')
            ;

        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);

//         $products->setPageSize(6)->setCurPage(1);

        $this->setProductCollection($products);
    }
}