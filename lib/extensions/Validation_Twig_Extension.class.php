<?php

class Validation_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
              "form_has_error" => array("form_has_error", false),
              "form_error" => array("form_error", false),
            );
  }

  public function getName()
  {
    return "validation";
  }
}
