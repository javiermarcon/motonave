<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addcategorias extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('categorias', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'nombre' => 
             array(
              'type' => 'string',
              'length' => 50,
             ),
             'root_id' => 
             array(
              'type' => 'integer',
              'length' => 8,
             ),
             'lft' => 
             array(
              'type' => 'integer',
              'length' => 4,
             ),
             'rgt' => 
             array(
              'type' => 'integer',
              'length' => 4,
             ),
             'level' => 
             array(
              'type' => 'integer',
              'length' => 2,
             ),
             ), array(
             'type' => 'InnoDB',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'latin1_swedish_ci',
             'charset' => 'latin1',
             ));
    }

    public function down()
    {
        $this->dropTable('categorias');
    }
}