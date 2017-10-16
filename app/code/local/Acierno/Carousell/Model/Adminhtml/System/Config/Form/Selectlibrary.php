<?php


class Acierno_Carousell_Model_Adminhtml_System_Config_Form_Selectlibrary extends Mage_Core_Model_Abstract
{
    public function toOptionArray()
    {
        return Mage::helper('acierno_carousell')->getAllFiles();
    }
}

