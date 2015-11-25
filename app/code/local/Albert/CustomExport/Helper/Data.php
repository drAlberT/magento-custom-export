<?php

class Albert_CustomExport_Helper_Data extends Mage_Core_Helper_Abstract
{
    public static function loadTemplate()
    {
        $pathToTemplate = Mage::getModuleDir('Block', 'Albert_CustomExport')
            . DS . 'Template/template.csv';

        return explode(',', file_get_contents($pathToTemplate));
    }
}
