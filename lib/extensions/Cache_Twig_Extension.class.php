<?php

class Cache_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "cache" => array("cache", false),
              "cache_save" => array("cache_save", false),
            );
  }

  public function getName()
  {
    return "cache";
  }
}
