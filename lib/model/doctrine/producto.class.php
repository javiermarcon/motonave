<?php

/**
 * producto
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    importmol
 * @subpackage model
 * @author     Javier Marcon
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class producto extends Baseproducto
{
    public function __toString()
		{
		return $this->getNombre();
		}
}
