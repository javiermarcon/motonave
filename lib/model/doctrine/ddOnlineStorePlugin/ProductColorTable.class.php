<?php

/**
 * ProductColorTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProductColorTable extends PluginProductColorTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProductColorTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ProductColor');
    }
}