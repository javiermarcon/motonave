<?php

/**
 * productoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class productoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object productoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('producto');
    }

public function traerUnProducto(Doctrine_Query $q)
  {
    return $this->getConProductosSql($q)->fetchOne();
  }
 
  public function getConProductos(Doctrine_Query $q = null)
  {
    return $this->getConProductosSql($q)->execute();
  }
 
  public function contarProductos(Doctrine_Query $q = null)
  {
    return $this->getConProductosSql($q)->count();
  }
 
  public function getConProductosSql(Doctrine_Query $q = null)
	{
	    if (is_null($q))
	    {
		$q = Doctrine_Query::create()
		->from('producto p');
	    }

		$alias = $q->getRootAlias();
		
	    $q->addOrderBy($alias.'.nombre ASC');

	    return $q;
	}

}
