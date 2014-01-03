<?php

class Mage_Catalog_Block_Product_Slider extends Mage_Catalog_Block_Product_Abstract
{
    public function __construct()
    {
        parent::__construct();

        $storeId = Mage::app()->getStore()->getId();

        $products = Mage::getResourceModel('reports/product_collection')
            ->addAttributeToSelect(array('image'))
            ->setStoreId($storeId)
            ->addStoreFilter($storeId)
            ->addAttributeToFilter('show_in_slider', '1')
            ;

        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);

        $this->setProductCollection($products);
    }
}