<?php



class Acierno_Carousell_Model_Adminhtml_System_Config_Backend_File extends
    Mage_Adminhtml_Model_System_Config_Backend_File
{
    protected function _getAllowedExtensions(){
        return array('value' => 'js');
    }
}