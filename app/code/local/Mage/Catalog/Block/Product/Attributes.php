<?php

class Mage_Catalog_Block_Product_Attributes extends Mage_Catalog_Block_Product_View
{

    protected function getConfigurableAttributes()
    {
        $attributes = array();

        $_product = $this->getProduct();
        $parentIds = Mage::getResourceSingleton('catalog/product_type_configurable')->getParentIdsByChild($_product->getId());
        if($parentIds)
        {
            $_parentProduct = Mage::getModel('catalog/product')->load($parentIds[0]);
            $attributes = $_parentProduct->getTypeInstance(true)->getConfigurableAttributesAsArray($_parentProduct);
        }

        return $attributes;
    }

}
