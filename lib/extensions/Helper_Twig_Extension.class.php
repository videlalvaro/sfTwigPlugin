<?php

class Helper_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "use_helper" => array("use_helper", false),
            );
  }

  public function getName()
  {
    return "helper";
  }
}
