<?php

/**
 * Acierno Carousell
 */

/**
 * Acierno Carousell Installer
 *
 * MySQL Installer.
 * @author Michele Acierno <michele.acierno@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

/* @var Mage_Core_Model_Resource_Setup $installer */


$installer = $this;

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('acierno_carousell/image'))
    ->addColumn(
        'image_id',
        Varien_Db_Ddl_Table::TYPE_INTEGER,
        null,
        array('primary'=>true,'identity'=>true,'nullable'=>false),
        'Image Id'
    )->addColumn(
        'name',
        Varien_Db_Ddl_Table::TYPE_TEXT,
        64,
        array('nullable'=>false),
        'Image name'
    )->addColumn(
        'status',
        Varien_Db_Ddl_Table::TYPE_BOOLEAN,
        null,
        array('nullable'=>false),
        'Image status'
    )->addColumn(
        'created_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array('default'=>Varien_Db_Ddl_Table::TIMESTAMP_INIT),
        'Image uploaded at'
    )->addColumn(
        'updated_at',
        Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
        null,
        array('default'=>Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
        'Image updated at'
    );

$installer->getConnection()->createTable($table);

$installer->endSetup();