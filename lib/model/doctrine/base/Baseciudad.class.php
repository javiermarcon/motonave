<?php

/**
 * Baseciudad
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $paises_codigo
 * @property string $provincia
 * @property pais $pais
 * @property Doctrine_Collection $transportes
 * @property Doctrine_Collection $clientes
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method string              getNombre()        Returns the current record's "nombre" value
 * @method string              getPaisesCodigo()  Returns the current record's "paises_codigo" value
 * @method string              getProvincia()     Returns the current record's "provincia" value
 * @method pais                getPais()          Returns the current record's "pais" value
 * @method Doctrine_Collection getTransportes()   Returns the current record's "transportes" collection
 * @method Doctrine_Collection getClientes()      Returns the current record's "clientes" collection
 * @method ciudad              setId()            Sets the current record's "id" value
 * @method ciudad              setNombre()        Sets the current record's "nombre" value
 * @method ciudad              setPaisesCodigo()  Sets the current record's "paises_codigo" value
 * @method ciudad              setProvincia()     Sets the current record's "provincia" value
 * @method ciudad              setPais()          Sets the current record's "pais" value
 * @method ciudad              setTransportes()   Sets the current record's "transportes" collection
 * @method ciudad              setClientes()      Sets the current record's "clientes" collection
 * 
 * @package    importmol
 * @subpackage model
 * @author     Javier Marcon
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseciudad extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ciudades');
        $this->hasColumn('id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('nombre', 'string', 35, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'fixed' => 1,
             'length' => 35,
             ));
        $this->hasColumn('paises_codigo', 'string', 3, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'fixed' => 1,
             'length' => 3,
             ));
        $this->hasColumn('provincia', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'fixed' => 1,
             'length' => 20,
             ));


        $this->index('paises_codigo', array(
             'fields' => 
             array(
              0 => 'paises_codigo',
             ),
             ));
        $this->option('collate', 'latin1_swedish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('pais', array(
             'local' => 'paises_codigo',
             'foreign' => 'codigo'));

        $this->hasMany('transporte as transportes', array(
             'local' => 'id',
             'foreign' => 'ciudades_id'));

        $this->hasMany('sf_guard_user_profile as clientes', array(
             'local' => 'id',
             'foreign' => 'ciudades_id'));
    }
}