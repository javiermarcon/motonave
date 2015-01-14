<?php

/**
 * BaseProductImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $product_id
 * @property Product $Product
 * 
 * @method integer      getId()         Returns the current record's "id" value
 * @method integer      getProductId()  Returns the current record's "product_id" value
 * @method Product      getProduct()    Returns the current record's "Product" value
 * @method ProductImage setId()         Sets the current record's "id" value
 * @method ProductImage setProductId()  Sets the current record's "product_id" value
 * @method ProductImage setProduct()    Sets the current record's "Product" value
 * 
 * @package    importmol
 * @subpackage model
 * @author     Javier Marcon
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProductImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product_image');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('product_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Product', array(
             'local' => 'product_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $sortable0 = new Doctrine_Template_Sortable(array(
             'uniqueBy' => 
             array(
              0 => 'product_id',
             ),
             ));
        $jcroppable0 = new Doctrine_Template_JCroppable(array(
             'images' => 
             array(
              0 => 'image_name',
             ),
             ));
        $this->actAs($sortable0);
        $this->actAs($jcroppable0);
    }
}