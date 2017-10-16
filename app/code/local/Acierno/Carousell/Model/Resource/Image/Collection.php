<?php
/**
 * Acierno Carousell
 */

/**
 * Acierno Carousell Model Resource Image Collection
 *
 * Resource Image Collection
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Acierno_Carousell_Model_Resource_Image_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * _construct
     *
     *
     */
    protected function _construct()
    {
        $this->_init('acierno_carousell/image');
    }
}
