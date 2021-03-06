<?php

/**
 * Baseusuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $password
 * @property string $tipo
 * 
 * @method integer getId()       Returns the current record's "id" value
 * @method string  getNombre()   Returns the current record's "nombre" value
 * @method string  getPassword() Returns the current record's "password" value
 * @method string  getTipo()     Returns the current record's "tipo" value
 * @method usuario setId()       Sets the current record's "id" value
 * @method usuario setNombre()   Sets the current record's "nombre" value
 * @method usuario setPassword() Sets the current record's "password" value
 * @method usuario setTipo()     Sets the current record's "tipo" value
 * 
 * @package    importmol
 * @subpackage model
 * @author     Javier Marcon
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Baseusuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuarios');
        $this->hasColumn('id', 'integer', 11, array(
             'type' => 'integer',
             'primary' => true,
             'unsigned' => true,
             'length' => 11,
             ));
        $this->hasColumn('nombre', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('password', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('tipo', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'default' => 'cliente',
             'length' => 10,
             ));

        $this->option('collate', 'latin1_swedish_ci');
        $this->option('charset', 'latin1');
        $this->option('type', 'InnoDB');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}