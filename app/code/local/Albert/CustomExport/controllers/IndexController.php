<?php

require_once 'Mage/Adminhtml/controllers/Sales/OrderController.php';

class Albert_CustomExport_IndexController extends Mage_Adminhtml_Sales_OrderController
{
    const FILENAME = 'custom_orders.csv';

    public function indexAction()
    {
        $orderIds = $this->getRequest()->getPost('order_ids', null);

        $serviceGenerateCSV = new Albert_CustomExport_Service_GenerateCSV($orderIds);
        $this->_prepareDownloadResponse(self::FILENAME, $serviceGenerateCSV->call());
    }
}
