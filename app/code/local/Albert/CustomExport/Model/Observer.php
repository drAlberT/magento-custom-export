<?php

class Albert_CustomExport_Model_Observer
{
    public function includeOption($observer)
    {
        $blockObserver = $observer->getEvent()->getBlock();

        // Get code of grid
        if ('sales_order_grid' == $blockObserver->getId()) {
            $block = $blockObserver->getMassactionBlock();
            if ($block) {
                $block->addItem('custom_export', array(
                    'label'=> Mage::helper('custom_export')->__('Custom Export Data to CSV'),
                    'url'  => Mage::getUrl('albert_custom_export', array('_secure' => true)),
                ));
            }
        }
    }
}
