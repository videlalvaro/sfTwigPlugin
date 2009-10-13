<?php

class Debug_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "debug_message" => array("debug_message", false),
              "log_message" => array("log_message", false),
            );
  }

  public function getName()
  {
    return "debug";
  }
}
