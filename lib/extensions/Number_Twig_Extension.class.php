<?php

class Number_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "format_number" => array("format_number", false),
              "format_currency" => array("format_currency", false),
            );
  }

  public function getName()
  {
    return "number";
  }
}
