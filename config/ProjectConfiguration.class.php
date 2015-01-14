<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
   // $this->enablePlugins(array('sfJqueryReloadedPlugin',
   //   'sfJqueryTreeDoctrineManagerPlugin',
   //   'sfImageTransformPlugin',
   //   'csDoctrineActAsSortablePlugin',
   //   'sfDoctrineJCroppablePlugin'));
    $this->enablePlugins('sfJqueryReloadedPlugin');
    $this->enablePlugins('sfJqueryTreeDoctrineManagerPlugin');
    $this->enablePlugins('sfImageTransformPlugin');
    $this->enablePlugins('csDoctrineActAsSortablePlugin');
    $this->enablePlugins('sfDoctrineJCroppablePlugin');
    $this->enablePlugins('sfDoctrineNestedSetPlugin');
	$this->enablePlugins('ddOnlineStorePlugin');
    $this->enablePlugins('sfExcelReaderPlugin');
    $this->enablePlugins('sfThumbnailPlugin');
    
    $this->setWebDir($this->getRootDir().'/html');
    
  }
}
