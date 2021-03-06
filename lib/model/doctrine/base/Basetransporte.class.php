<?php

/**
 * Basetransporte
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $direccion
 * @property integer $ciudades_id
 * @property string $telefono
 * @property string $mail
 * @property ciudad $ciudad
 * @property Doctrine_Collection $clientes
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getNombre()      Returns the current record's "nombre" value
 * @method string              getDireccion()   Returns the current record's "direccion" value
 * @method integer             getCiudadesId()  Returns the current record's "ciudades_id" value
 * @method string              getTelefono()    Returns the current record's "telefono" value
 * @method string              getMail()        Returns the current record's "mail" value
 * @method ciudad              getCiudad()      Returns the current record's "ciudad" value
 * @method Doctrine_Collection getClientes()    Returns the current record's "clientes" collection
 * @method transporte          setId()          Sets the current record's "id" value
 * @method transporte          setNombre()      Sets the current record's "nombre" value
 * @method transporte          setDireccion()   Sets the current record's "direccion" value
 * @method transporte          setCiudadesId()  Sets the current record's "ciudades_id" value
 * @method transporte          setTelefono()    Sets the current record's "telefono" value
 * @method transporte          setMail()        Sets the current record's "mail" value
 * @method transporte          setCiudad()      Sets the current record's "ciudad" value
 * @method transporte          setClientes()    Sets the current record's "clientes" collection
 * 
 * @package    importmol
 * @subpackage model
 * @author     Javier Marcon
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Basetransporte extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('transportes');
        $this->hasColumn('id', 'integer', 20, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 20,
             ));
        $this->hasColumn('nombre', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => 100,
             ));
        $this->hasColumn('direccion', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => 200,
             ));
        $this->hasColumn('ciudades_id', 'integer', 20, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('telefono', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('mail', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));


        $this->index('fk_transportes_ciudades1', array(
             'fields' => 
             array(
              0 => 'ciudades_id',
             ),
             ));
        $this->option('collate', 'latin1_swedish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('ciudad', array(
             'local' => 'ciudades_id',
             'foreign' => 'id'));

        $this->hasMany('sf_guard_user_profile as clientes', array(
             'local' => 'id',
             'foreign' => 'transportes_id'));
    }
}