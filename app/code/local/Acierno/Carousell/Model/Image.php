<?php
/**
 * Acierno Carousell
 */

/**
 * Acierno Carousell Model Category
 *
 *
 * Image Model

 * @method Acierno_Carousell_Model_Image getName()
 * @method setName(string $name)
 * @method Acierno_Carousell_Model_Image getStatus()
 * @method setStatus(bool $status)
 * @method Acierno_Carousell_Model_Image getCreatedAt()
 * @method Acierno_Carousell_Model_Image getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Acierno_Carousell_Model_Image extends Mage_Core_Model_Abstract
{

    /**
     * Event prefix overiding
     *
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'acierno_carousell_image';


    /**
     * Name for the object
     *
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'image';


    /**
     * _construct
     */

    protected function _construct()
    {
        $this->_init('acierno_carousell/image');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }


}
