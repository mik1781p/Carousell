<?php

/**
 * Acierno Carousell
 */

/**
 * Acierno Carousell Helper Data
 *
 * Main Helper
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */
class Acierno_Carousell_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getAllFiles()
    {

        //TODO Add controls for no files situation

        //catch all the libraries
        $filesDirectory = Mage::getBaseDir(Mage_Core_Model_store::URL_TYPE_MEDIA);
        $files = scandir($filesDirectory."/carousell");

        //wrap all the libraries and  send it
        $wrapper = array();
        $baseURL = (Mage::getBaseUrl(Mage_Core_Model_store::URL_TYPE_MEDIA))."/carousell";
        foreach($files as $file){
            if($file == '.' || $file=='..') continue;
            $wrapper[] = array (
                'value' => $baseURL.'/'.$file,
                'label' => $file
            );
        }
        return $wrapper;
    }

}