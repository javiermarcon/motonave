<?php

/**
 * BaseProduct
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $subname
 * @property clob $description
 * @property clob $specifications
 * @property integer $capacity
 * @property decimal $price
 * @property boolean $is_available
 * @property boolean $is_featured
 * @property ProductCategory $category
 * @property Doctrine_Collection $images
 * @property Doctrine_Collection $Colors
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method integer             getCategoryId()     Returns the current record's "category_id" value
 * @method string              getName()           Returns the current record's "name" value
 * @method string              getSubname()        Returns the current record's "subname" value
 * @method clob                getDescription()    Returns the current record's "description" value
 * @method clob                getSpecifications() Returns the current record's "specifications" value
 * @method integer             getCapacity()       Returns the current record's "capacity" value
 * @method decimal             getPrice()          Returns the current record's "price" value
 * @method boolean             getIsAvailable()    Returns the current record's "is_available" value
 * @method boolean             getIsFeatured()     Returns the current record's "is_featured" value
 * @method ProductCategory     getCategory()       Returns the current record's "category" value
 * @method Doctrine_Collection getImages()         Returns the current record's "images" collection
 * @method Doctrine_Collection getColors()         Returns the current record's "Colors" collection
 * @method Product             setId()             Sets the current record's "id" value
 * @method Product             setCategoryId()     Sets the current record's "category_id" value
 * @method Product             setName()           Sets the current record's "name" value
 * @method Product             setSubname()        Sets the current record's "subname" value
 * @method Product             setDescription()    Sets the current record's "description" value
 * @method Product             setSpecifications() Sets the current record's "specifications" value
 * @method Product             setCapacity()       Sets the current record's "capacity" value
 * @method Product             setPrice()          Sets the current record's "price" value
 * @method Product             setIsAvailable()    Sets the current record's "is_available" value
 * @method Product             setIsFeatured()     Sets the current record's "is_featured" value
 * @method Product             setCategory()       Sets the current record's "category" value
 * @method Product             setImages()         Sets the current record's "images" collection
 * @method Product             setColors()         Sets the current record's "Colors" collection
 * 
 * @package    importmol
 * @subpackage model
 * @author     Javier Marcon
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProduct extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('category_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('subname', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('specifications', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('capacity', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('price', 'decimal', null, array(
             'type' => 'decimal',
             'notnull' => true,
             ));
        $this->hasColumn('is_available', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('is_featured', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ProductCategory as category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('ProductImage as images', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $this->hasMany('ProductColor as Colors', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'name',
             ),
             'canUpdate' => true,
             ));
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($sluggable0);
        $this->actAs($timestampable0);
    }
}