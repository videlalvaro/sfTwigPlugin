<?php

class sfTwigHelperToExtensionTask extends sfPluginBaseTask
{
  protected function configure()
  {
    $this->namespace = 'twig';
    $this->name = 'helpers';

    $this->briefDescription = 'Convert symfony helpers to Twig Extensions';
  }
  
  protected function execute($arguments = array(), $options = array())
  {
    $pluginDir = sfApplicationConfiguration::getActive()->getPluginConfiguration('sfTwigPlugin')->getRootDir();
    $helperDir = sfApplicationConfiguration::getActive()->getSymfonyLibDir() . '/helper/';
    
    $command = sprintf('cd %s; ./helpers.sh %s', $pluginDir, $helperDir);
    exec($command, $output);
    echo implode(PHP_EOL, $output), "\n";
  }
}